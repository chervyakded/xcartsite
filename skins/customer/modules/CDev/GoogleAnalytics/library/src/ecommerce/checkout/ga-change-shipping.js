/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/changeShippingEvent', [ 'googleAnalytics/eCommerceCoreEvent' ], function(Event) {
  return Event.extend({
    namespace: 'Checkout',

    getListeners () {
      return {
        updateCart: this.updateCartHandler
      }
    },

    updateCartHandler (event, data) {
      var actionData = _.first(this.getActions('checkout'))

      if (actionData && data.shippingMethodName) {
        this.sendChangeMethodEvent(data.shippingMethodName, data.shippingTotal || null, actionData)
      }
    },

    sendChangeMethodEvent (methodName) {
    }
  });
});
