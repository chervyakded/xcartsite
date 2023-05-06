/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/eCommercePurchaseEvent', ['googleAnalytics/eCommerceCoreEvent', 'js/underscore'],
    function (eCommerceCoreEvent, _) {
      return eCommerceCoreEvent.extend({

        getListeners () {
          return {
            'ga-pageview-sending': this.registerPurchase
          }
        },

        registerPurchase (event, data) {
          //to prevent sending purchase action before step 5 checkout action
          setTimeout(this._registerPurchase.bind(this), 300)
        },

        _registerPurchase (event, data) {
          var actionData = _.first(this.getActions('purchase'))

          if (actionData) {
            this._registerPurchaseEvent(
              actionData['data']['products'],
              actionData['data']['actionData']
            )
          }
        },

        _registerPurchaseEvent (productsData, actionData) {
        }

      });
    }
);
