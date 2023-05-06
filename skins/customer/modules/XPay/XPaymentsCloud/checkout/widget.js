/* X-Payments Cloud widget wrapper */

function XPaymentsWidgetWrapper()
{
    this.widget = new XPaymentsWidget();
    this.initialized = false;
    this.wrapperSettings = {
        flcExtendable: false,
        walletId: '',
        delayedPayment: false,
        savedCardFieldName: '',
    };

    this.placeOrderSelector = '.place-order';
    this.walletBtnContainers = {
        'applePay': '.apple-pay-button-container',
        'googlePay': '.google-pay-button-container',
    }

    this.load = function() {
        this.getWidget().load();
    }
    this.getWidget = function() {
        return this.widget;
    }
    this.isValid = function() {
        return this.initialized && this.getWidget().isValid();
    }
    this.setWalletMode = function(walletId) {
        this.getWidget().setWalletMode(walletId);
    }

    this.getTokenField = function() {
        var tokenField = jQuery(this.getWidget().getFormElm()).find('input[name=' + this.getWidget().config.tokenName + ']');
        return (tokenField.length) ? tokenField : false;
    }

    this.onExtendedFlcSuccess = function(params) {
        var tokenField = this.getTokenField();
        if (!tokenField) {
            tokenField = jQuery('<input type="hidden">');
            tokenField.attr({
                name: this.getWidget().config.tokenName,
                id: this.getWidget().config.tokenName,
            });
            jQuery(this.getWidget().getFormElm()).append(tokenField);
        }
        tokenField.val(params.token);
        _.defer(this.clickPlaceOrder);
    }

    this.onFallbackFlcSubmit = (function(event, state) {
        if (this.isValid()) {
            // FLC - redefine default form action
            state.state = false;
            setTimeout(Checkout.instance.startLoadAnimation, 0);
            core.trigger('checkout.common.block');
            this.getWidget().submit();
        }
    }).bind(this);

    this.onFlcSectionSwitch = (function(event, data) {
        if (
            this.isValid()
            && 'undefined' !== typeof data.newSection
            && 'payment' === data.newSection.name
        ) {
            this.getWidget().refresh();
        }
    }).bind(this);

    this.isFlc = function() {
        return (typeof Checkout !== 'undefined' && typeof Checkout.instance !== 'undefined');
    }

    this.updateTotal = (function(event, data) {
        this.isValid() && this.getWidget().setOrder(data.total, data.currency);
    }).bind(this);

    this.updateSaveCard = (function(event, data) {
        this.isValid() && this.getWidget().showSaveCard(data.value);
    }).bind(this);

    this.updatePlaceOrderButton = (function(event, data) {
        this.isValid() && this.changePlaceOrderButton(this.getWidget().getPaymentMethod());
    }).bind(this);

    this.mimicPlaceOrderButton = function() {
        var placeOrder = jQuery(this.placeOrderSelector);
        for (let walletId in this.walletBtnContainers) {
            let walletBtn = this.getWalletBtnContainer(walletId, false);
            if (walletBtn.length) {
                walletBtn = walletBtn.find('button');
                _.defer(function () {
                    walletBtn.toggleClass('disabled', placeOrder.hasClass('disabled'));
                    walletBtn.attr('title', placeOrder.attr('title') || '');
                    walletBtn.attr('disabled', walletBtn.hasClass('disabled'));
                });
                if (walletBtn.is(':visible') && placeOrder.is(':visible')) {
                    placeOrder.hide();
                }
            }
        }
    }

    this.createApplePayButton = function() {
        let btn = [];
        if (this.getWidget().isApplePaySupportedByDevice()) {
            btn = jQuery(this.getWidget().createApplePayButton({
                buttonClass: 'apple-pay-button-place-order',
                buttonContent: this.isFlc() ? '' : '&nbsp;',
            }));
        }
        return btn;
    }

    this.createGooglePayButton = function() {
        let btn = [];
        if (this.getWidget().isGooglePayInitialized()) {
            btn = jQuery(this.getWidget().createGooglePayButton({
                buttonSizeMode: 'fill',
            }));
        }
        return btn;
    }

    this.createWalletButton = function(walletId) {
        let btn = [];
        switch (walletId) {
            case 'applePay':
                btn = this.createApplePayButton();
                break;
            case 'googlePay':
                btn = this.createGooglePayButton();
                break;
        }
        if (!btn.length) {
            return [];
        }

        var placeOrderBtn = jQuery(this.placeOrderSelector);
        var container = jQuery('<div class="' + this.walletBtnContainers[walletId].substring(1) + '" style="display: none;"></div>');
        container.insertAfter(placeOrderBtn);

        container.append(btn);
        btn = btn.find('button');

        btn.addClass(placeOrderBtn.attr('class'));
        btn.removeClass(this.placeOrderSelector.substring(1));

        this.mimicPlaceOrderButton();

        return container;
    }

    this.getWalletBtnContainer = function(walletId, autoCreate)
    {
        if ('undefined' == typeof autoCreate) {
            autoCreate = true;
        }

        let walletBtn = jQuery(this.walletBtnContainers[walletId]);
        if (
            !walletBtn.length
            && this.getWidget().isValid()
            && autoCreate
        ) {
            walletBtn = this.createWalletButton(walletId);
        }
        return walletBtn;
    }

    this.changePlaceOrderButton = function(paymentMethod) {
        _.defer(_.bind(function() {
            let walletBtnShown = false;
            for (let walletId in this.walletBtnContainers) {
                let walletBtn = this.getWalletBtnContainer(walletId);
                if (walletBtn.length) {
                    walletBtnShown = walletBtnShown || walletId === paymentMethod;
                    walletBtn.toggle(walletId === paymentMethod);
                }
            }
            let originalBtn = jQuery(this.placeOrderSelector);
            originalBtn.toggle(!walletBtnShown);
        }, this));
    }

    this.toggleDelayedPaymentInfo = function (useSavedCard) {
        if (xpaymentsWidgetWrapperConfig.delayedPayment) {
            var saveNewCardBlock = document.getElementById('xpayments-delayed-payment-info-save-new');
            var useSavedCardBlock = document.getElementById('xpayments-delayed-payment-info-use-saved');
            if (useSavedCard) {
                saveNewCardBlock.style.display = 'none';
                useSavedCardBlock.style.display = 'block';
            } else {
                saveNewCardBlock.style.display = 'block';
                useSavedCardBlock.style.display = 'none';
            }
        }
    }

    this.showDefaultDelayedPaymentInfo = function () {
        if (xpaymentsWidgetWrapperConfig.delayedPayment) {
            var saveNewCardBlock = document.getElementById('xpayments-delayed-payment-info-save-new');
            var useSavedCardBlock = document.getElementById('xpayments-delayed-payment-info-use-saved');
            if ('none' === saveNewCardBlock.style.display && 'none' === useSavedCardBlock.style.display) {
                saveNewCardBlock.style.display = 'block';
            }
        }
    }

    this.clickPlaceOrder = function() {
        jQuery('.place-order').click();
    }

    this.onWalletInit = function(walletId) {
        if (this.getWidget().config.walletMode) {
            this.changePlaceOrderButton(this.getWidget().config.walletMode);
        }
    }

}

XPaymentsWidgetWrapper.prototype.initialize = function(settings, wrapperSettings) {
    this.getWidget().init(settings);
    this.wrapperSettings = wrapperSettings;

    // Assign handlers
    this.getWidget().on('fail', function() {
        if (this.isFlc()) {
            _.defer(Checkout.instance.finishLoadAnimation);
        } else {
            jQuery('.steps').get(0).loadable.unshade();
            jQuery('.cart-items').get(0).loadable.unshade();
            jQuery('.place-order').removeClass('submitted');
        }
        core.trigger('checkout.common.anyChange');
        core.trigger('checkout.common.unblock');
    }, this).on('alert', function(params) {
        setTimeout(function () {
            if ('popup' === params.type) {
                core.trigger('message', {type: 'info', message: params.message});
            } else {
                core.showError(params.message);
            }
        }, 500)
    }).on('loaded', function(params) {
        if (this.getWidget().config.walletMode) {
            this.changePlaceOrderButton(this.getWidget().getPaymentMethod());
        }
        this.showDefaultDelayedPaymentInfo();
    }, this).on('paymentmethod.change', function(params) {
        this.changePlaceOrderButton(params.newId);
        this.toggleDelayedPaymentInfo(
          'card' === params.newId
          && 'undefined' !== typeof params.savedCardId
          && '' !== params.savedCardId
        );
    }, this).on('applepay.init', function() {
        this.onWalletInit('applePay');
    }, this).on('googlepay.init', function() {
        this.onWalletInit('googlePay');
    }, this)
      .on('applepay.buttonclick', this.clickPlaceOrder)
      .on('googlepay.buttonclick', this.clickPlaceOrder);

    core.bind('xpaymentsAnonymousRegister', this.updateSaveCard);
    core.bind('xpaymentsTotalUpdate', this.updateTotal);
    core.bind('checkout.placeOrderButton.loaded', this.updatePlaceOrderButton);
    if (this.isFlc()) {
        if (wrapperSettings.flcExtendable) {
            this.getWidget().on('success', this.onExtendedFlcSuccess, this)
        } else {
            core.bind('checkout.common.ready', this.onFallbackFlcSubmit);
        }
        core.bind('fastlane_section_switched', this.onFlcSectionSwitch);
    }
    core.bind([
        'checkout.common.state.ready',
        'checkout.common.state.nonready',
        'checkout.common.anyChange'
    ], _.bind(this.mimicPlaceOrderButton, this));

    this.initialized = true;

    return this;
}

window.xpaymentsWidgetInstance = new XPaymentsWidgetWrapper();

jQuery(function() {
    var loadXPaymentsWidget = function() {
        var wrapper = window.xpaymentsWidgetInstance;
        if (
            'undefined' !== typeof xpaymentsWidgetConfig
            && !wrapper.initialized
        ) {
            wrapper.initialize(xpaymentsWidgetConfig, xpaymentsWidgetWrapperConfig)
        }

        if (wrapper.initialized) {
            var walletId = (
              'undefined' !== typeof xpaymentsWidgetConfig
              && jQuery('#xpayments-iframe-container').length
            ) ? xpaymentsWidgetWrapperConfig.walletId : '';
            wrapper.setWalletMode(walletId);
            // GPay button should wait until widget loaded
            wrapper.changePlaceOrderButton(('googlePay' !== walletId) ? walletId : '');
            wrapper.load();
        }
    }
    loadXPaymentsWidget();
    core.bind('checkout.paymentTpl.loaded', loadXPaymentsWidget);
});

// Workaround to avoid deferred widget submit
define('xpayments/checkout_fastlane/sections/payment/place_order',
  ['checkout_fastlane/sections/payment/place_order',
   'checkout_fastlane/sections/section_change_button'],
  function (PlaceOrder, SectionChangeButton) {
      var wrapper = window.xpaymentsWidgetInstance;

      PlaceOrder = SectionChangeButton.component('PlaceOrder');
      var parentPlace = PlaceOrder.options.methods.placeOrder;

      PlaceOrder = PlaceOrder.extend({
          methods: {
              placeOrder: function () {
                  if (
                    wrapper.isValid()
                    && wrapper.wrapperSettings.flcExtendable
                    && !wrapper.getTokenField()
                  ) {
                      var root = this.$root;
                      if (this.ready) {
                          _.defer(root.startLoadAnimation);
                          this.onReadyPlaceOrder();
                          if (this.state.state !== false) {
                              wrapper.getWidget().submit();
                          } else {
                              _.defer(root.finishLoadAnimation);
                          }
                      } else {
                          this.onNotReadyPlaceOrder();
                      }
                  } else {
                      parentPlace.apply(this, arguments);
                  }
              }
          }
      });

      Vue.registerComponent(SectionChangeButton, PlaceOrder);

      return PlaceOrder;
  }
);
