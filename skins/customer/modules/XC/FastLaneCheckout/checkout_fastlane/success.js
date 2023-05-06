/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * success.js
 *
 * Copyright (c) 2001-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('checkout_fastlane/success', ['js/jquery', 'ready'], function () {
  sessionStorage.removeItem('flc_last_visited_section');
});
