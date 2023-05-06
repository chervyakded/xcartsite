/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * update cart event
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/GAShoppingCartHandleEvent', ['googleAnalytics/base/GAShoppingCartHandleEvent', 'googleAnalytics/eCommerceCoreEvent'], function(GAShoppingCartHandleEventBase, eCommerceCoreEvent) {
  let GAShoppingCartHandleEvent = GAShoppingCartHandleEventBase.extend({

    registerAddItem(item, quantity_change) {
      item.quantity = Math.abs(quantity_change);

      this.sendECEvent('addProduct', item);
      this.sendECEvent('add', {}, true);

      this.sendEvent('AddToCart', 'Add to cart');
    },

    registerRemoveItem(item, quantity_change) {
      item.quantity = Math.abs(quantity_change);

      this.sendECEvent('addProduct', item);
      this.sendECEvent('remove', {}, true);

      this.sendEvent('RemoveFromCart', 'Remove from cart');
    },

  });

  GAShoppingCartHandleEvent.instance = new GAShoppingCartHandleEvent();

  return GAShoppingCartHandleEvent;
});
