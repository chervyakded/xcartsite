/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * update cart event
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/GAShoppingCartHandleEvent', ['googleAnalytics/base/GAShoppingCartHandleEvent', 'js/underscore'], function(GAShoppingCartHandleEventBase, _) {
  let GAShoppingCartHandleEvent = GAShoppingCartHandleEventBase.extend({
    changes: {
      add: [],
      remove: []
    },

    resetContainer () {
      var actionData = _.first(this.getActions('view_cart'))
      var currency = this.coreInstance.getSetting('currency')
      var value = 0

      if (actionData && !_.isUndefined(actionData.context)) {
        if (actionData.context.currency) {
          currency = actionData.context.currency
        }
        if (actionData.context.value) {
          value = actionData.context.value
        }
      }

      this.container = {
        currency,
        items: []
      }

      if (value) {
        this.container.value = value
      }
    },

    addCartItemAction (data) {
      this.container.items.push(data)
    },

    flushViewCart () {
      this.sendEvent('view_cart', this.container)
      this.resetContainer()
    },

    registerAddItem (item, quantity_change) {
      item.quantity = Math.abs(quantity_change)
      this.changes.add.push(item)
    },

    registerRemoveItem (item, quantity_change) {
      item.quantity = Math.abs(quantity_change)
      this.changes.remove.push(item)
    },

    registerItemsChange (data) {
      var currency = this.coreInstance.getSetting('currency')

      if (this.changes.add.length) {
        this.sendEvent('add_to_cart', {
          currency,
          value: this.calculateChangesValue(this.changes.add),
          items: this.changes.add
        })
        this.changes.add = []
      }

      if (this.changes.remove.length) {
        this.sendEvent('remove_from_cart', {
          currency,
          value: this.calculateChangesValue(this.changes.remove),
          items: this.changes.remove
        })
        this.changes.remove = []
      }
    },

    calculateChangesValue (items) {
      var value = 0

      _.each(
        items,
        function (item, index) {
          value += parseFloat(item.price) * item.quantity
        }
      )

      return value
    }

  })

  GAShoppingCartHandleEvent.instance = new GAShoppingCartHandleEvent();

  return GAShoppingCartHandleEvent;
});
