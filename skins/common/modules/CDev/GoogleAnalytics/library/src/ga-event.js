/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/event', [ 'googleAnalytics/core', 'js/underscore' ], function(GACore, _) {
  return Object.extend({
    constructor () {
      this.coreInstance = GACore.instance

      if (!this.coreInstance.isAvailable()) {
        return
      }

      jQuery().ready(_.bind(this.processReady, this))

      this.bindListeners()
    },

    bindListeners () {
      _.each(
        this.getListeners(),
        _.bind(
          function (handler, eventName) {
            core.bind(eventName, _.bind(handler, this))
          },
          this
        )
      )
    },

    createFunctionWithTimeout (callback, args, opt_timeout) {
      var called = false

      function fn () {
        if (!called) {
          called = true
          callback(args)
        }
      }

      setTimeout(fn, opt_timeout || 500)
      return fn
    },

    getListeners () {
      return {}
    },

    processReady () {
    },

    sendPageView () {
      this.coreInstance.registerPageView()
    },

    sendEvent (name, label, value, namespace) {
      this.coreInstance.registerEvent(namespace || this.namespace, name, label, value)
    }
  });
});
