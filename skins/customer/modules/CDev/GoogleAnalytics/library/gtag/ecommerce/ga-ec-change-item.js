/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceChangeItemEvent', ['googleAnalytics/base/eCommerceChangeItemEvent', 'js/underscore'], function (eCommerceChangeItemEventBase, _) {
      let eCommerceChangeItemEvent = eCommerceChangeItemEventBase.extend({

        registerAddToCart (event, data) {
          var currency = this.coreInstance.getSetting('currency')
          var gaProductData = data.gaProductData

          if (gaProductData) {
            if (!_.isUndefined(gaProductData.list)) {
              gaProductData.item_list_name = gaProductData.list
            }
            this.sendEvent('add_to_cart', {
              currency,
              items: [gaProductData]
            })
          }
        }

      });

      eCommerceChangeItemEvent.instance = new eCommerceChangeItemEvent();

      return eCommerceChangeItemEvent;
    }
);
