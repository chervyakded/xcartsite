/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceImpressionsEvent', ['googleAnalytics/base/eCommerceImpressionsEvent', 'js/underscore'], function (eCommerceImpressionsEventBase, _) {
  let eCommerceImpressionEvent = eCommerceImpressionsEventBase.extend({
    getImpressionHash (data) {
      return window.core.utils.hash(
        _.omit(data, 'position')
      )
    },

    addImpressionAction (data) {
      this.sendECEvent('addImpression', data)
    },

    flushImpressions () {
      this.sendPageView()
    }
  })

  eCommerceImpressionEvent.instance = new eCommerceImpressionEvent();

  return eCommerceImpressionEvent;
});
