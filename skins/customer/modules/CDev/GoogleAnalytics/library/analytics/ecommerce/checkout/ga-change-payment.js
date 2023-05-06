/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/changePaymentMethod', [ 'googleAnalytics/base/changePaymentMethod', 'googleAnalytics/event' ], function(GAChangePaymentEventBase, Event) {
  let GAChangePaymentEvent = GAChangePaymentEventBase.extend({
    sendChangeMethodEvent(methodName) {
      this.sendEvent('changePaymentMethod', methodName, methodName, 'checkout');
    }
  });

  GAChangePaymentEvent.instance = new GAChangePaymentEvent();

  return GAChangePaymentEvent;
});
