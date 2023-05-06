/* Buy with Apple Pay */

function XPaymentsBuyWithApplePay(base)
{
    this.singleBuyMode = true;
    this.callSupermethod('constructor', arguments);
}

extend(XPaymentsBuyWithApplePay, XPaymentsCheckoutWithApplePay);

XPaymentsBuyWithApplePay.prototype.name = 'XPaymentsBuyWithApplePay';

XPaymentsBuyWithApplePay.prototype.findPattern = '.apple-pay-buy-button-container';

core.bind(['block.product.details.postprocess', 'update-product-page'], function() {
  core.autoload('XPaymentsBuyWithApplePay');
});