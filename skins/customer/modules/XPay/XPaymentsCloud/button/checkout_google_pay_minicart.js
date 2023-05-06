/* Checkout with Google Pay Minicart version */

function XPaymentsCheckoutWithGooglePayMinicart(base)
{
  this.callSupermethod('constructor', arguments);
}

extend(XPaymentsCheckoutWithGooglePayMinicart, XPaymentsCheckoutWithGooglePay);

XPaymentsCheckoutWithGooglePayMinicart.prototype.name = 'XPaymentsCheckoutWithGooglePayMinicart';

XPaymentsCheckoutWithGooglePayMinicart.prototype.findPattern = '.google-pay-checkout-button-minicart-container';

core.bind('minicart.postprocess', function () {
  core.autoload('XPaymentsCheckoutWithGooglePayMinicart');
});

