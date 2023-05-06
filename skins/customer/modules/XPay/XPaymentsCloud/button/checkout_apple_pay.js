/* Checkout with Apple Pay */

function XPaymentsCheckoutWithApplePay(base)
{
  this.walletId = 'applePay';
  this.callSupermethod('constructor', arguments);
}

extend(XPaymentsCheckoutWithApplePay, XPaymentsCheckoutWithWallet);

XPaymentsCheckoutWithApplePay.prototype.name = 'XPaymentsCheckoutWithApplePay';

XPaymentsCheckoutWithApplePay.prototype.findPattern = '.apple-pay-checkout-button-container';

decorate('XPaymentsCheckoutWithApplePay', 'initialize', function() {
  arguments.callee.previousMethod.apply(this, arguments);
  if (this.isSupported()) {
    this.show();
  }
});

decorate('XPaymentsCheckoutWithApplePay', 'initWidget', function(settings) {
  arguments.callee.previousMethod.apply(this, arguments);

  this.getWidget()
    .on('applepay.init', this.onApplePayInitialized, this)
    .on('applepay.paymentauthorized', this.onPayment, this)
    .on('applepay.cancel', this.onCancel, this)
    .on('applepay.shippingcontactselected', function(shippingContact) {
      this.waitReadyForCallbacks().then((function() {
        this.onShippingContactChange(shippingContact);
      }).bind(this));
    }, this)
    .on('applepay.shippingmethodselected', function(shippingMethod) {
      this.waitReadyForCallbacks().then((function() {
        this.onShippingMethodChange(shippingMethod);
      }).bind(this));
    }, this);
});

XPaymentsCheckoutWithApplePay.prototype.onApplePayInitialized = function()
{
  this.base.find('button').off('click').click(
    (this.begin).bind(this)
  );
  this.show();
}

XPaymentsCheckoutWithApplePay.prototype.onShippingContactChange = function(shippingContact)
{
  core.post(
    {
      target: 'wallet_shipping',
      action: 'set_destination'
    },
    (function (xhr) {
      var response = jQuery.parseJSON(xhr.responseText);
      this.shippingContactHandler(response);
    }).bind(this),
    Object.assign({}, this.shippingContactPrepareData(shippingContact), this.commonData)
  );
}

XPaymentsCheckoutWithApplePay.prototype.onShippingMethodChange = function(shippingMethod)
{
  core.post(
    {
      target: 'wallet_shipping',
      action: 'change_method'
    },
    (function (xhr) {
      var response = jQuery.parseJSON(xhr.responseText);
      this.shippingMethodHandler(response);
    }).bind(this),
    Object.assign({}, this.shippingMethodPrepareData(shippingMethod), this.commonData)
  );
}

XPaymentsCheckoutWithApplePay.prototype.onCancel = function(payment)
{
  core.post(
    {
      target: 'wallet_shipping',
      action: 'cancelled'
    },
    null,
    {}
  );
}

XPaymentsCheckoutWithApplePay.prototype.onPayment = function(payment)
{
  core.post(
    {
      target: 'checkout',
      action: 'xpayments_wallet_prepare'
    },
    (function (xhr) {
      var response = jQuery.parseJSON(xhr.responseText);
      this.paymentHandler(response, payment);
    }).bind(this),
    Object.assign({}, this.paymentPrepareData(payment), this.commonData)
  );
}

XPaymentsCheckoutWithApplePay.prototype.shippingContactPrepareData = function(shippingContact) {
  return {
    destination_country: shippingContact.countryCode,
    destination_state: shippingContact.administrativeArea,
    destination_custom_state: shippingContact.administrativeArea,
    destination_zipcode: shippingContact.postalCode,
    destination_city: shippingContact.locality,
  }
}

XPaymentsCheckoutWithApplePay.prototype.shippingContactHandler = function(response) {
  if (response.errors) {
    response.errors.forEach(
      function (error, i, arr) {
        arr[i] = new ApplePayError(error.code, error.contactField, error.message);
      }
    );
  }
  this.getWidget().completeApplePayShippingContactSelection(response);
};

XPaymentsCheckoutWithApplePay.prototype.shippingMethodPrepareData = function(shippingMethod) {
  return {
    methodId: shippingMethod.identifier,
  }
}

XPaymentsCheckoutWithApplePay.prototype.shippingMethodHandler = function(response) {
  this.getWidget().completeApplePayShippingMethodSelection(response);
};

XPaymentsCheckoutWithApplePay.prototype.paymentPrepareData = function(payment) {
  return {
    billingContact: payment.billingContact,
    shippingContact: payment.shippingContact,
  }
}

XPaymentsCheckoutWithApplePay.prototype.paymentHandler = function(response, payment) {
  if (response.errors && response.errors.length) {
    response.errors.forEach(
      function (error, i, arr) {
        arr[i] = new ApplePayError(error.code, error.contactField, error.message);
      }
    );
    this.getWidget().completeApplePayPayment({
      status: ApplePaySession.STATUS_FAILURE,
      errors: response.errors
    });
  } else {
    this.waitPage();
    this.getWidget().succeedApplePayPayment(payment);
  }
};

XPaymentsCheckoutWithApplePay.prototype.isSupported = function()
{
  return this.getWidget().isApplePaySupportedByDevice();
}

core.autoload('XPaymentsCheckoutWithApplePay');

core.bind('cart.main.loaded', function () {
  core.autoload('XPaymentsCheckoutWithApplePay');
});
