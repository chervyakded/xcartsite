/* Checkout with wallet base class */

function XPaymentsCheckoutWithWallet(base)
{
    // Init X-Payments Widget singletons
    XPaymentsCheckoutWithWallet.createStaticWidget(this.name);

    if ('undefined' == typeof this.walletId) {
        this.walletId = '';
    }
    if ('undefined' == typeof this.singleBuyMode) {
        this.singleBuyMode = false;
    }

    this.readyForCallbacks = !this.singleBuyMode;
    this.commonData = {};
    this.commonData.xpaymentsWalletId = this.walletId;
    this.commonData[xliteConfig.form_id_name] = xliteConfig.form_id;
    if (this.singleBuyMode) {
        this.commonData.xpaymentsBuyWithWallet = '1';
    }
    this.callSupermethod('constructor', arguments);
}

extend(XPaymentsCheckoutWithWallet, AController);

XPaymentsCheckoutWithWallet.prototype.initialize = function()
{
    if (this.isSupported()) {
        this.bindCoreEvents();
        this.autoloadConfig();
    }
}

XPaymentsCheckoutWithWallet.prototype.bindCoreEvents = function()
{
    if (this.singleBuyMode) {
        core.bind('xpaymentsBuyWithWalletReady', (function (event, data) {
            if (this.walletId === data.walletId) {
                var widget = this.getWidget();
                widget.setOrder(data.total, data.currency);
                widget.config[this.walletId].shippingMethods = data.shippingMethods;
                widget.config[this.walletId].requiredShippingFields = data.requiredShippingFields;
                widget.config[this.walletId].requiredBillingFields = data.requiredBillingFields;
                jQuery(widget.config.form).find('[name=xpaymentsWalletId]').val(this.walletId);
                this.setReadyForCallbacks();
            }
        }).bind(this));

        core.bind('xpaymentsBuyWithWalletPriceUpdate', (function (event, data) {
            this.getWidget().setOrder(data.price);
        }).bind(this));
    }
}

XPaymentsCheckoutWithWallet.prototype.autoloadConfig = function()
{
    var configFromGlobalName = 'config' + this.name;
    var configFromGlobal = ('undefined' !== typeof window[configFromGlobalName]) ? window[configFromGlobalName] : null;
    if (configFromGlobal) {
        this.initWidget(configFromGlobal);
        this.load();
    }
}

XPaymentsCheckoutWithWallet.prototype.show = function()
{
    this.base.show();
    this.base.prev('.xpayments-wallet-separator').show();
}

XPaymentsCheckoutWithWallet.prototype.isSupported = function()
{
    return true;
}

XPaymentsCheckoutWithWallet.prototype.initWidget = function(settings)
{
    settings.walletMode = this.walletId;
    this.getWidget().init(settings);

    // Assign handlers
    this.getWidget().on('fail', function () {
        this.unblockPage();
    }, this).on('wallet.start', function () {
        this.blockPage();
    }, this).on('alert', function (params) {
        setTimeout(function () {
            if ('popup' === params.type) {
                core.trigger('message', {type: 'info', message: params.message});
            } else {
                core.showError(params.message);
            }
        }, 500)
    });
}

XPaymentsCheckoutWithWallet.prototype.blockPage = function()
{
    assignShadeOverlay(jQuery('#page-wrapper'));

    // Hide mini cart
    var mini = jQuery('.lc-minicart');
    if (mini.length && 'undefined' !== typeof mini.get(0).controller) {
        mini = mini.get(0).controller.block;
        if (mini.isExpanded) {
            mini.toggleViewMode();
        }
    }
}

XPaymentsCheckoutWithWallet.prototype.unblockPage = function()
{
    unassignShadeOverlay(jQuery('#page-wrapper'));
}

XPaymentsCheckoutWithWallet.prototype.waitPage = function()
{
    assignWaitOverlay(jQuery('#page-wrapper'));
}

XPaymentsCheckoutWithWallet.prototype.load = function()
{
    this.getWidget().load();
}

XPaymentsCheckoutWithWallet.prototype.begin = function()
{
    if (this.singleBuyMode) {
        var details = jQuery('div.product-details');
        details = (details.length && 'undefined' !== typeof details.get(0).controller)
          ? details.get(0).controller.block
          : null;
        if (!details) {
            console.error('Product Details controller not found!');
            return;
        }
        details.gatherFormFields();
        var form = details.base.find('form.product-details');
        var fields = form.serializeArray();
        fields.push({ name: 'xpaymentsWalletId', value: this.walletId });
        fields.push({ name: 'xpaymentsBuyWithWallet', value: '1' });
        this.setReadyForCallbacks(false);

        core.post(
          {},
          null,
          fields
        );

    }

    this.getWidget().beginCheckoutWithWallet();
}

XPaymentsCheckoutWithWallet.prototype.getWidget = function()
{
    return XPaymentsCheckoutWithWallet.widget[this.name];
}

XPaymentsCheckoutWithWallet.prototype.setReadyForCallbacks = function(value)
{
    this.readyForCallbacks = !!('undefined' === typeof value || value);
}

XPaymentsCheckoutWithWallet.prototype.waitReadyForCallbacks = function()
{
    return new Promise((function(resolve, reject) {
        var counter = 0;
        var checkReady = (function() {
            counter++;
            if (this.readyForCallbacks) {
                resolve();
            } else if (counter < 300) {
                setTimeout(checkReady, 100);
            } else {
                reject();
            }
        }).bind(this);
        checkReady();
    }).bind(this));
}

XPaymentsCheckoutWithWallet.getStaticWidget = function(className)
{
    return (
      'undefined' !== typeof XPaymentsCheckoutWithWallet.widget
      && XPaymentsCheckoutWithWallet.widget[className]
    ) ? XPaymentsCheckoutWithWallet.widget[className] : null;
}

XPaymentsCheckoutWithWallet.createStaticWidget = function(className)
{
    if (!XPaymentsCheckoutWithWallet.widget) {
        XPaymentsCheckoutWithWallet.widget = [];
    }
    if (!XPaymentsCheckoutWithWallet.widget[className]) {
        XPaymentsCheckoutWithWallet.widget[className] = new XPaymentsWidget();
    }

    // Optimization: Minicart and base version can share single iframe because options are identical
    var partnerClass;
    var pos = className.indexOf('Minicart');
    if (-1 !== pos) {
        partnerClass = className.substr(0, pos);
    } else {
        partnerClass = className + 'Minicart';
    }
    if (XPaymentsCheckoutWithWallet.widget[partnerClass]) {
        XPaymentsCheckoutWithWallet.widget[className].widgetId = XPaymentsCheckoutWithWallet.widget[partnerClass].widgetId;
    }
}
