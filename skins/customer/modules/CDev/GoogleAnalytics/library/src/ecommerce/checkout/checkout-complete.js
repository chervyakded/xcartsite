/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/checkoutCompleteEvent', ['googleAnalytics/eCommerceCoreEvent'], function(eCommerceCoreEvent) {
  let GACheckoutCompleteEvent = eCommerceCoreEvent.extend({
    namespace: 'Checkout',

    getListeners () {
      return {
        'ga-pageview-sending': this.registerInvoiceEnter
      }
    },

    registerInvoiceEnter () {
      core.trigger('ga-checkout-step-completed', {
        step: 'complete'
      })
    }
  })

  GACheckoutCompleteEvent.instance = new GACheckoutCompleteEvent();

  return GACheckoutCompleteEvent;
});
