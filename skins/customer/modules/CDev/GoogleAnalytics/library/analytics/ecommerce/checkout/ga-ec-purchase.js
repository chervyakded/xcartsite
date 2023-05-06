/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/purchaseEvent', ['googleAnalytics/base/eCommercePurchaseEvent', 'js/underscore'],
    function (eCommercePurchaseBaseEvent, _) {
      let eCommercePurchaseEvent = eCommercePurchaseBaseEvent.extend({
        _registerPurchaseEvent(productsData, actionData) {
          const self = this
          _.each(productsData, function (product) {
            self.sendECEvent('addProduct', product)
          });

          this.sendECEvent('purchase', actionData || {}, true)
          this.sendEvent('Checkout', 'Purchase')
        },

      });

      eCommercePurchaseEvent.instance = new eCommercePurchaseEvent();

      return eCommercePurchaseEvent;
    }
);
