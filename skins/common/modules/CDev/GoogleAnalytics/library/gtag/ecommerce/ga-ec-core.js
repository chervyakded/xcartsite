/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceCoreEvent', ['googleAnalytics/base/eCommerceCoreEvent', 'googleAnalytics/event', 'js/underscore'], function (eCommerceCoreEventBase, GAEvent, _) {
  let eCommerceCoreEvent = eCommerceCoreEventBase.extend({
    container: {}
  })

  eCommerceCoreEvent.instance = new eCommerceCoreEvent();

  return eCommerceCoreEvent;
});
