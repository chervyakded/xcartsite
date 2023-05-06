/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * When main X-Payments method is switched off child methods are disabled so reload page to reflect changes
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

core.bind(
  'payment.methods.switch.loaded',
  function (event, data)
  {
    if (data.data.responseJSON && data.data.responseJSON.href) {
      let cell = data.switcher.closest('.cell');
      if (
        'XPay_XPaymentsCloud' === cell.data('module-name')
        && cell.is(':not(.xpayments-wallet-method)')
        && !data.switcher.prop('checked')
      ) {
        core.trigger('xpayments.payment.methods.list.reload');
      }
    }
  }
);


core.bind(
  'xpayments.payment.methods.list.reload',
  function (event, data) {
    core.get(
      URLHandler.buildURL({target: 'payment_settings', action: '', widget: '\\XLite\\View\\Payment\\Configuration'}),
      function(xhr, status, data) {
        var paymentConf = jQuery(data).find('.payment-conf');
        if (paymentConf.length > 0) {
          jQuery('.payment-conf').html(paymentConf.html());
          core.microhandlers.runAll();
          core.autoload(PopupButtonAddPaymentMethod);
        }
      }
    );
  }
);