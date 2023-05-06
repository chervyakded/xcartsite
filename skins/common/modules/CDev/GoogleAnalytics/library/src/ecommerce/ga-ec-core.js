/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/eCommerceCoreEvent', ['googleAnalytics/event', 'js/underscore'], function (GAEvent, _) {
  let eCommerceCoreEventBase = GAEvent.extend({
    constructor () {
      eCommerceCoreEventBase.superclass.constructor.apply(this, arguments)
    },

    getActions (type, context) {
      if (!jQuery(context).length) {
        context = document
      }

      var actionsOnPage = _.map(
        jQuery('*[data-ga-ec-action]', context),
        function (actionEl) {
          return jQuery(actionEl).data('ga-ec-action')
        }
      )

      return _.filter(actionsOnPage, function (action) {
        return action['ga-type'] === type
      })
    }
  })

  return eCommerceCoreEventBase;
});
