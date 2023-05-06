/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceImpressionsEvent', ['googleAnalytics/base/eCommerceImpressionsEvent', 'googleAnalytics/eCommerceCoreEvent', 'js/underscore'], function (eCommerceImpressionsEventBase, eCommerceCoreEvent, _) {
  let eCommerceImpressionEvent = eCommerceImpressionsEventBase.extend({

    initialize () {
      eCommerceImpressionEvent.superclass.initialize.apply(this, arguments)
      var currency = this.coreInstance.getSetting('currency')
      this.list_container_tpl = {
        currency,
        item_list_name: '',
        items: []
      }
    },

    resetContainer () {
      this.container.lists = {}
    },

    getImpressionHash (data) {
      return window.core.utils.hash(
        _.omit(data, 'index')
      )
    },

    getListHash (list) {
      return window.core.utils.hash({name: list})
    },

    calculateChunkThresholdLength (length) {
      return JSON.stringify(this.container).length
    },

    addImpressionAction (data) {
      var listHash = this.getListHash(data.item_list_name)

      if (_.isUndefined(this.container.lists[listHash])) {
        this.container.lists[listHash] = JSON.parse(JSON.stringify(this.list_container_tpl))
      }
      this.container.lists[listHash].item_list_name = data.item_list_name
      this.container.lists[listHash].items.push(data)
    },

    flushImpressions () {
      for (var listHash in this.container.lists) {
        if (this.container.lists.hasOwnProperty(listHash)) {
          this.sendEvent('view_item_list', this.container.lists[listHash])
        }
      }
      this.resetContainer()
    }

  })

  eCommerceImpressionEvent.instance = new eCommerceImpressionEvent();

  return eCommerceImpressionEvent;
});
