/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Checkout steps events
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceCheckoutStepsEvent', [ 'googleAnalytics/base/eCommerceCheckoutStepsEvent', 'googleAnalytics/event' ], function(eCommerceCheckoutStepBaseEvent, Event) {
  let eCommerceCheckoutStepEvent = eCommerceCheckoutStepBaseEvent.extend({
    _handleStepEntered (step, data, actionData) {
      const currency = this.coreInstance.getSetting('currency')

      switch (step) {
        case this.ADDRESS_STEP:
          this.sendEvent('begin_checkout', {
            currency,
            items: actionData.data.products
          })

          break

        case this.SHIPPING_STEP:
          // TODO Methods reloading should be handled
          this.sendEvent('add_shipping_info', {
            value: actionData.data.shipping_value,
            currency,
            shipping_tier: actionData.data.shipping_method,
            items: actionData.data.products
          })
          break

        case this.PAYMENT_STEP:
          this.sendEvent('add_payment_info', {
            payment_type: actionData.data.payment_method,
            items: actionData.data.products
          })
          break

        case this.PLACE_STEP:
          break

        case this.COMPLETE_STEP:
          break
      }
    },

    _handleStepCompleted (step, data, actionData) {
      switch (step) {
        case this.ADDRESS_STEP:
          break

        case this.SHIPPING_STEP:
          break

        case this.PAYMENT_STEP:
          break

        case this.PLACE_STEP:
          break

        case this.COMPLETE_STEP:
          break
      }
    }
  })

  eCommerceCheckoutStepEvent.instance = new eCommerceCheckoutStepEvent();

  return eCommerceCheckoutStepEvent;
});
