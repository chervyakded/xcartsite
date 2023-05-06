/* Checkout with Apple Pay Minicart version */

function XPaymentsCheckoutWithApplePayMinicart(base)
{
  this.callSupermethod('constructor', arguments);
}

extend(XPaymentsCheckoutWithApplePayMinicart, XPaymentsCheckoutWithApplePay);

XPaymentsCheckoutWithApplePayMinicart.prototype.name = 'XPaymentsCheckoutWithApplePayMinicart';

XPaymentsCheckoutWithApplePayMinicart.prototype.findPattern = '.apple-pay-checkout-button-minicart-container';

core.bind('minicart.postprocess', function () {
  core.autoload('XPaymentsCheckoutWithApplePayMinicart');
});

