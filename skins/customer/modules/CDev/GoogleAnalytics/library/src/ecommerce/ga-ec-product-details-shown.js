/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/eCommerceDetailsShownEvent', ['googleAnalytics/eCommerceCoreEvent', 'js/underscore'], function (eCommerceCoreEvent, _) {
  return eCommerceCoreEvent.extend({

    getListeners () {
      return {
        'ga-pageview-sending': this.registerAllDetailsShown
      }
    },

    registerAllDetailsShown (event, data) {
      var self = this

      _.each(
        this.getActions('addProduct'),
        function (action, index) {
          self.registerDetailsShown(action.data)
        }
      )
    },

    registerDetailsShown (addProductData) {
    }

  });
});
