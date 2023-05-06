/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceWishlistHandleEvent', ['googleAnalytics/base/eCommerceWishlistHandleEvent', 'js/underscore'], function (eCommerceWishlistHandleEventBase, _) {
  let eCommerceWishlistHandleEvent = eCommerceWishlistHandleEventBase.extend({

    registerAddToWishlist (event, data) {
      var gaProductData = data.gaProductData

      if (gaProductData) {
        if (!_.isUndefined(gaProductData.list)) {
          gaProductData.item_list_name = gaProductData.list
        }

        this.sendEvent('add_to_wishlist', {
          items: [gaProductData]
        })
      }
    }

  })

    eCommerceWishlistHandleEvent.instance = new eCommerceWishlistHandleEvent();

    return eCommerceWishlistHandleEvent;
  }
);
