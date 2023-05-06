/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * update cart event
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/GAShoppingCartHandleEvent', ['googleAnalytics/eCommerceCoreEvent', 'js/underscore'], function(eCommerceCoreEvent, _) {
  let GAShoppingCartHandleEventBase = eCommerceCoreEvent.extend({
    namespace: 'Product',
    chunkThreshold: 6000,

    constructor () {
      GAShoppingCartHandleEventBase.superclass.constructor.apply(this, arguments)
      this.resetContainer()
    },

    resetContainer () {
      this.container = {}
    },

    getListeners () {
      return {
        'ga-pageview-sending': this.registerViewCart,
        'ga-update-cart': this.registerUpdateCart
      }
    },

    registerViewCart (event, data) {
      var self = this

      var actionData = _.first(self.getActions('view_cart'))
      if (actionData && !_.isUndefined(actionData.data)) {
        self.processViewCart(actionData.data)
      }
    },

    processViewCart (cartData) {
      var self = this
      var length = 0
      var baseLength = JSON.stringify(this.container).length

      _.each(
        cartData.items,
        function (item, index) {
          self.addCartItemAction(item)
          length += JSON.stringify(item).length
          if ((length + baseLength) > self.chunkThreshold) {
            self.flushViewCart()
            length = 0
          }
        }
      )

      if (length) {
        self.flushViewCart()
      }
    },

    addCartItemAction (data) {
    },

    flushViewCart () {
    },

    registerUpdateCart (event, parent_data) {
      var data = parent_data.data
      if (data.items) {
        for (var i = 0; i < data.items.length; i++) {
          var item = data.items[i]

          if (item.quantity_change > 0) {
            this.registerAddItem(item['ga-data'], item.quantity_change)
          } else if (item.quantity_change < 0) {
            this.registerRemoveItem(item['ga-data'], item.quantity_change)
          }
        }
      }
      this.registerItemsChange(data)
    },

    registerItemsChange (data) {
    },
    registerAddItem (item) {
    },
    registerRemoveItem (item) {
    }
  })

  return GAShoppingCartHandleEventBase;
});
