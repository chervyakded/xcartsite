/* X-Payments Wallet custom handler */

(function() {
  var toHide = [];
  if (!window.ApplePaySession || !ApplePaySession.canMakePayments()) {
    toHide.push('applePay');
  } else if (jQuery('#xpayments-applePay-method').length) {
    toHide.push('googlePay');
  }

  core.bind([
    'checkout.paymentMethods.initialize',
    'checkout.main.ready',
    'checkout.common.anyChange',
    'checkout.sections.payment.persist',
    'checkout.paymentTpl.loaded',
    'checkout.common.state.ready',
    'checkout.xpayments.googlepay.nonready'
  ], function () {
    var removed = false;
    toHide.forEach(function(walletId) {
      var anchor = jQuery('#xpayments-' + walletId + '-method');
      if (anchor.length) {
        anchor.closest('.payment-method').remove();
        removed = true;
      }
    });
    removed && core.trigger('checkout.xpayments.wallets.removed');
  });

  core.bind([
    'checkout.main.postprocess',
    'checkout.common.state.ready',
    'resources.ready',
  ], function () {
    if (!jQuery('.payment-method input:checked').length) {
      jQuery('.payment-method input').first().click();
    }
  });
})();