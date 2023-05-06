/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceDetailsShownEvent', ['googleAnalytics/base/eCommerceDetailsShownEvent', 'js/underscore'], function (eCommerceDetailsShownEventBase, _) {
  let eCommerceDetailsShownEvent = eCommerceDetailsShownEventBase.extend({

    registerDetailsShown (addProductData) {
      var currency = this.coreInstance.getSetting('currency')
      this.sendEvent('view_item', {
        currency,
        items: [addProductData]
      })
    }

  })

  eCommerceDetailsShownEvent.instance = new eCommerceDetailsShownEvent();

  return eCommerceDetailsShownEvent;
});
