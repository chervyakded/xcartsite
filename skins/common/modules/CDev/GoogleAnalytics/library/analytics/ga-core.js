/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Core google analytics
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/core', ['googleAnalytics/base/core', 'js/underscore'], function(GACoreBase, _) {
  let GACore = GACoreBase.extend({

    sendPageViewInit () {
      GACore.superclass.sendPageViewInit.apply(this, arguments)

      core.trigger('ga-pageview-sending')
      this.sendGAPageView()
      core.trigger('ga-pageview-sent')
    },

    sendGAPageView () {
      if ('undefined' != typeof (window.ga)) {
        ga('send', 'pageview')
      }
    },

    /**
     * Send the event
     *
     * @param {string} category Typically the object that was interacted with (e.g. button)
     * @param {string} action   The type of interaction (e.g. click)
     * @param {string} label    Useful for categorizing events (e.g. nav buttons)
     * @param {number} value    Values must be non-negative. Useful to pass counts (e.g. 4 times)
     * @return void
     */
    sendGAEvent (category, action, label, value) {
      if ('undefined' != typeof (window.ga)) {
        var data = {
          eventCategory: category,
          eventAction: action
        }
        if (label || value) {
          data.eventLabel = label
        }
        if (value) {
          data.eventValue = value
        }

        data.hitCallback = function () {
          core.trigger('ga-event-sent', data)
        }

        ga('send', 'event', data)
      }
    },

    /**
     * Send the ecommerce event
     *
     * @return void
     */
    sendGAECEvent () {
      if (arguments.length === 2 && !_.isEmpty(arguments[1])) {
        ga('ec:' + arguments[0], arguments[1])
      }
      if (arguments.length === 3 && arguments[0] === 'setAction' && !_.isEmpty(arguments[2])) {
        ga('ec:' + arguments[0], arguments[1], arguments[2])
      }
    },

    registerPageView () {
      this.sendGAPageView()
    },

    registerEvent () {
      if (!_.isEmpty(arguments)) {
        this.sendGAEvent.apply(this, arguments)
      }
    },

    registerECEvent () {
      if (!_.isEmpty(arguments)) {
        this.sendGAECEvent.apply(this, arguments)
      }
    },

    isAvailable () {
      return !_.isUndefined(window.ga) && !_.isUndefined(ga.loaded) && ga.loaded
    }
  })

  GACore.instance = new GACore();

  return GACore;
});
