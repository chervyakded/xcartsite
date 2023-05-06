/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Core google analytics
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/core', ['googleAnalytics/base/core', 'googleAnalytics/mapper', 'js/underscore'], function(GACoreBase, GAMapper, _) {
  let GACore = GACoreBase.extend({

    sendPageViewInit () {
      GACore.superclass.sendPageViewInit.apply(this, arguments)

      core.trigger('ga-pageview-sending')
      core.trigger('ga-pageview-sent')
    },

    sendGTagEvent (action, data) {
      if ('undefined' != typeof (window.gtag) && action && !_.isEmpty(data)) {
        gtag('event', action, GAMapper.prototype.map(action, data))
      }
    },

    registerEvent () {
      if (!_.isEmpty(arguments)) {
        var args = [
          arguments[1] || undefined,
          arguments[2] || undefined
        ]
        this.sendGTagEvent.apply(this, args)
      }
    },

    isAvailable () {
      return !_.isUndefined(window.gaGlobal)
    }
  })

  GACore.instance = new GACore();

  return GACore;
});
