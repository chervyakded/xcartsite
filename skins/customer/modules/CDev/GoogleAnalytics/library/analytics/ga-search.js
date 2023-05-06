/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * GA search specific controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/searchEvent', [ 'googleAnalytics/base/searchEvent', 'googleAnalytics/event' ], function(GASearchEventBase, Event) {
  let GASearchEvent = GASearchEventBase.extend({
    sendSearchSubstringEvent (substring, event) {
      this.sendEvent('Search', substring, undefined, 'Product')
    }
  })

  GASearchEvent.instance = new GASearchEvent();

  return GASearchEvent;
});

