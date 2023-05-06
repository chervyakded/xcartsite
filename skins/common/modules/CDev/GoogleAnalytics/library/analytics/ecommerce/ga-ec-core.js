/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceCoreEvent', ['googleAnalytics/base/eCommerceCoreEvent', 'googleAnalytics/event', 'js/underscore'], function (eCommerceCoreEventBase, GAEvent, _) {
  var requireEC = _.once(function (gaCoreInstance) {
    ga('require', 'ec');

    ga('set', '&cu', gaCoreInstance.getSetting('currency'));
  });

  let eCommerceCoreEvent = eCommerceCoreEventBase.extend({
    namespace: 'Ecommerce',

    constructor () {
      eCommerceCoreEvent.superclass.constructor.apply(this, arguments)

      requireEC(this.coreInstance)
    },

    sendECEvent (event, data, is_action) {
      if (is_action) {
        this.coreInstance.registerECEvent('setAction', event, data)
      } else {
        this.coreInstance.registerECEvent(event, data)
      }
    }
  })

  eCommerceCoreEvent.instance = new eCommerceCoreEvent();

  return eCommerceCoreEvent;
});
