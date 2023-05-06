/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/changeShippingEvent', [ 'googleAnalytics/base/changeShippingEvent', 'googleAnalytics/event' ], function(GAChangeShippingEventBase, Event) {
  let GAChangeShippingEvent = GAChangeShippingEventBase.extend({
    sendChangeMethodEvent (methodName, value, actionData) {
      const currency = this.coreInstance.getSetting('currency')

      this.sendEvent('add_shipping_info', {
        value,
        currency,
        shipping_tier: methodName,
        items: actionData.data.products
      })
    }
  })

  GAChangeShippingEvent.instance = new GAChangeShippingEvent();

  return GAChangeShippingEvent;
});
