/* Buy with Google Pay */

function XPaymentsBuyWithGooglePay(base)
{
    this.singleBuyMode = true;
    this.callSupermethod('constructor', arguments);
}

extend(XPaymentsBuyWithGooglePay, XPaymentsCheckoutWithGooglePay);

XPaymentsBuyWithGooglePay.prototype.name = 'XPaymentsBuyWithGooglePay';

XPaymentsBuyWithGooglePay.prototype.findPattern = '.google-pay-buy-button-container';

core.bind(['block.product.details.postprocess', 'update-product-page'], function() {
  core.autoload('XPaymentsBuyWithGooglePay');
});
