/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * GA search specific controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/searchEvent', [ 'googleAnalytics/base/searchEvent', 'googleAnalytics/event' ], function(GASearchEventBase, Event) {
  let GASearchEvent = GASearchEventBase.extend({
    is_sent: false,

    sendSearchSubstringEvent (substring, event) {
      var self = this
      if (self.is_sent) {
        return
      }
      event.preventDefault()
      self.sendEvent('search', {
        search_term: substring,
        event_callback () {
          self.createFunctionWithTimeout(function (e) {
            self.is_sent = true
            e.currentTarget.click()
          }, event, 1000)
        }
      })
    }

  })

  GASearchEvent.instance = new GASearchEvent();

  return GASearchEvent;
});

