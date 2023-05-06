/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceProductClickEvent', ['googleAnalytics/base/eCommerceProductClickEvent', 'js/underscore'], function (eCommerceProductClickEventBase, _) {
  let eCommerceProductClickEvent = eCommerceProductClickEventBase.extend({
    is_sent: false,

    onProductDetailsClick (data, event) {
      var self = this

      if (self.is_sent) {
        return
      }

      event.preventDefault()

      this.sendEvent('select_item', {
        item_list_name: data.item_list_name,
        items: [data],
        event_callback () {
          self.createFunctionWithTimeout(function (e) {
            self.is_sent = true
            e.currentTarget.click()
          }, event)
        }
      })
    }

  })

  eCommerceProductClickEvent.instance = new eCommerceProductClickEvent();

  return eCommerceProductClickEvent;
});
