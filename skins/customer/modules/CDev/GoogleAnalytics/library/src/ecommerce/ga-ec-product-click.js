/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/eCommerceProductClickEvent', ['googleAnalytics/eCommerceCoreEvent', 'js/underscore'], function (eCommerceCoreEvent, _) {
  let eCommerceProductClickEventBase = eCommerceCoreEvent.extend({

    constructor () {
      eCommerceProductClickEventBase.superclass.constructor.apply(this, arguments)

      var productLinks = jQuery('.products a.product-thumbnail, .products a.fn, .products a.url')

      var self = this

      productLinks.click(function (event) {
        var dataOwner = jQuery('*[data-ga-ec-action]', jQuery(event.currentTarget).parents('.product'))

        if (dataOwner.length) {
          self.onProductDetailsClick(
            dataOwner.data('ga-ec-action').data,
            event
          )
        }

        return true
      })
    },

    onProductDetailsClick (data) {
    }

  })

  return eCommerceProductClickEventBase;
});
