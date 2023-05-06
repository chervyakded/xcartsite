/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * GA search specific controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/searchEvent', [ 'googleAnalytics/event' ], function(Event) {
  return Event.extend({
    namespace: 'search',

    processReady () {
      jQuery('.search-product-form button[type=\'submit\'], .simple-search-product-form button[type=\'submit\']').click(_.bind(this.registerSearchSubstring, this))
    },

    registerSearchSubstring (event) {
      var substring = jQuery(event.currentTarget).closest('form').find('input[name="substring"]').val()
      if (substring) {
        this.sendSearchSubstringEvent(substring, event)
      }
    },

    sendSearchSubstringEvent (substring, event) {
    }
  });
});

