/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Core google analytics
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/core', ['js/underscore'], function(_) {
  return Object.extend({

    settings: {
      sendPageview: true,
      currency: 'USD'
    },

    constructor () {
      let $initScript = jQuery('#ga-init-script')
      if ($initScript.length) {
        this.settings = _.defaults(
          $initScript.data('settings'),
          this.settings
        )
      }

      this.initialize()
    },

    getSetting (name) {
      return this.settings[name]
    },

    initialize () {
      if (this.settings.sendPageview) {
        jQuery().ready(_.bind(this.sendPageViewInit, this))
      }
    },

    sendPageViewInit () {
    },

    registerPageView () {
    },

    registerEvent () {
    },

    isAvailable () {
    }
  });
});
