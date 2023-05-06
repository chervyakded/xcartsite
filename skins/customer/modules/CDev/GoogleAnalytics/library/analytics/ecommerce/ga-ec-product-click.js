/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceProductClickEvent', ['googleAnalytics/base/eCommerceProductClickEvent', 'js/underscore'], function (eCommerceProductClickEventBase, _) {
  let eCommerceProductClickEvent = eCommerceProductClickEventBase.extend({

    onProductDetailsClick (data, event) {
      this.sendECEvent('addProduct', data)
      this.sendECEvent('click', {
        list: data.list
      }, true)
    }

  });

  eCommerceProductClickEvent.instance = new eCommerceProductClickEvent();

  return eCommerceProductClickEvent;
});
