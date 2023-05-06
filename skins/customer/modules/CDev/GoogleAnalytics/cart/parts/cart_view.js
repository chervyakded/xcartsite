/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * update cart event
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

decorate(
  'CartView',
  'handleUpdateCart',
  function (event, data) {
    arguments.callee.previousMethod.apply(this, arguments);

    core.trigger('ga-update-cart', {
      event,
      data
    });
  }
);
