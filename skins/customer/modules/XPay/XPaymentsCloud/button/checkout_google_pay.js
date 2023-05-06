/* Checkout with Google Pay */

function XPaymentsCheckoutWithGooglePay(base)
{
  this.walletId = 'googlePay';
  this.callSupermethod('constructor', arguments);
}

extend(XPaymentsCheckoutWithGooglePay, XPaymentsCheckoutWithWallet);

XPaymentsCheckoutWithGooglePay.prototype.name = 'XPaymentsCheckoutWithGooglePay';

XPaymentsCheckoutWithGooglePay.prototype.findPattern = '.google-pay-checkout-button-container';

decorate('XPaymentsCheckoutWithGooglePay', 'initWidget', function(settings)
{
  arguments.callee.previousMethod.apply(this, arguments);

  this.getWidget()
    .on('googlepay.ready', this.onGooglePayReady, this)
    .on('googlepay.buttonclick', this.begin, this)
    .on('googlepay.cancel', this.onCancel, this)
    .on('googlepay.paymentauthorized', function(paymentData) {
        return this.onPayment(paymentData);
    }, this)
    .on('googlepay.paymentdatachanged', function(intermediatePaymentData) {
        return new Promise((function(resolve, reject) {
          this.waitReadyForCallbacks().then((function() {
            this.onPaymentDataChanged(intermediatePaymentData).then(function(data) {
              resolve(data);
            });
          }).bind(this));
        }).bind(this));
    }, this)
});

XPaymentsCheckoutWithGooglePay.prototype.onGooglePayReady = function()
{
  var btn = jQuery(this.getWidget().createGooglePayButton({ buttonSizeMode: 'fill' }));
  this.base.children('.google-pay-button').empty().append(btn);
  this.base.get(0).controller.show();
}

XPaymentsCheckoutWithGooglePay.prototype.onCancel = function()
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

XPaymentsCheckoutWithGooglePay.prototype.onPaymentDataChanged = function(intermediatePaymentData)
{
  return new Promise((function(resolve, reject) {

    var formTarget = 'wallet_shipping';
    var formAction, handler, prepareData;

    switch (intermediatePaymentData.callbackTrigger) {
      case 'INITIALIZE':
      case 'SHIPPING_ADDRESS':
        formAction = 'set_destination';
        handler = this.shippingAddressHandler;
        prepareData = this.shippingAddressPrepareData;
        break;
      case 'SHIPPING_OPTION':
        formAction = 'change_method';
        handler = this.shippingMethodHandler;
        prepareData = this.shippingMethodPrepareData;
        break;
    }

    core.post(
      {
        target: formTarget,
        action: formAction
      },
      (function (xhr) {
        var response = jQuery.parseJSON(xhr.responseText);
        resolve(handler.bind(this)(response));
      }).bind(this),
      Object.assign({}, prepareData(intermediatePaymentData), this.commonData)
    );
  }).bind(this));
}

XPaymentsCheckoutWithGooglePay.prototype.shippingAddressPrepareData = function(intermediatePaymentData)
{
  var address = intermediatePaymentData.shippingAddress;
  return {
    destination_country: address.countryCode,
    destination_state: address.administrativeArea,
    destination_custom_state: address.administrativeArea,
    destination_zipcode: address.postalCode,
    destination_city: address.locality,
  }
}

XPaymentsCheckoutWithGooglePay.prototype.shippingAddressHandler = function(response)
{
  if (response.newTransactionInfo) {
    this.getWidget().setOrder(response.newTransactionInfo.totalPrice);
  }
  return response;
};

XPaymentsCheckoutWithGooglePay.prototype.shippingMethodPrepareData = function(intermediatePaymentData)
{
  return {
    methodId: intermediatePaymentData.shippingOptionData.id,
  }
}

XPaymentsCheckoutWithGooglePay.prototype.shippingMethodHandler = function(response)
{
  return response;
};

XPaymentsCheckoutWithGooglePay.prototype.onPayment = function(paymentData)
{
  return new Promise((function(resolve, reject) {
    core.post(
      {
        target: 'checkout',
        action: 'xpayments_wallet_prepare'
      },
      (function (xhr) {
        var response = jQuery.parseJSON(xhr.responseText);
        resolve(this.paymentHandler.bind(this)(response, paymentData));
      }).bind(this),
      Object.assign({}, this.paymentPrepareData(paymentData), this.commonData)
    );
  }).bind(this));
}

XPaymentsCheckoutWithGooglePay.prototype.paymentPrepareData = function(payment)
{
  var result = {
    shippingAddress: payment.shippingAddress,
    email: payment.email,
  }
  if ('undefined' !== typeof payment.paymentMethodData.info.billingAddress) {
    result.billingAddress = payment.paymentMethodData.info.billingAddress;
  }

  return result;
}

XPaymentsCheckoutWithGooglePay.prototype.paymentHandler = function(error, payment)
{
  var result;

  if (error) {
    result = {
      transactionState: 'ERROR',
      error: error,
    }
  } else {
    this.waitPage();
    result = this.getWidget().succeedGooglePayPayment(payment);
  }

  return result;
};

XPaymentsCheckoutWithGooglePay.prototype.isSupported = function()
{
  return true;
}

core.autoload('XPaymentsCheckoutWithGooglePay');

core.bind('cart.main.loaded', function () {
  core.autoload('XPaymentsCheckoutWithGooglePay');
});

