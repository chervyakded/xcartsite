/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

decorate(
  'ProductsListView',
  'addToCartRequestParams',
  function (elem) {
    var params = arguments.callee.previousMethod.apply(this, arguments);

    var ecData = jQuery('*[data-ga-ec-action]', elem.closest('.add-to-cart-button'));
    if (!_.isUndefined(ecData) && ecData.length !== 0) {
      var context = ecData.data('ga-ec-action').context;

      if (!_.isUndefined(context.list)) {
        params.ga_list = context.list;
      }
    }

    return params;
  }
);

decorate(
  'ProductsListView',
  'openQuickLookParams',
  function (elem) {
    var params = arguments.callee.previousMethod.apply(this, arguments);

    var ecData = jQuery('*[data-ga-ec-action]', elem);
    if (!_.isUndefined(ecData) && ecData.length !== 0) {
      var context = ecData.data('ga-ec-action').context;

      if (!_.isUndefined(context.list)) {
        params.ga_list = context.list;
      }
    }

    return params;
  }
);
