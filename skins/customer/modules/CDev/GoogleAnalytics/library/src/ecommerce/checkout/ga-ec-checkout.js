/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/base/eCommerceCheckoutStepsEvent', ['googleAnalytics/eCommerceCoreEvent', 'js/underscore'],
  function (eCommerceCoreEvent, _) {

    return eCommerceCoreEvent.extend({
      ADDRESS_STEP: 'address',
      SHIPPING_STEP: 'shipping',
      PAYMENT_STEP: 'payment',
      PLACE_STEP: 'place',
      COMPLETE_STEP: 'complete',

      namespace: 'Checkout',

      getListeners () {
        return {
          'ga-checkout-step-entered': this.handleStepEntered,
          'ga-checkout-step-completed': this.handleStepCompleted
        }
      },

      handleStepEntered (event, data) {
        var actionData = _.first(
          this.getActions('checkout')
        )

        if (actionData) {
          this._handleStepEntered(data.step, data, actionData)
        }
      },

      handleStepCompleted (event, data) {
        const actionsName = data.step === this.COMPLETE_STEP
          ? 'checkout_complete'
          : 'checkout'
        var actionData = _.first(
          this.getActions(actionsName)
        )

        if (actionData) {
          this._handleStepCompleted(data.step, data, actionData)
        }
      },


      _handleStepEntered (step, data, actionData) {
      },
      _handleStepCompleted (step, data, actionData) {
      }
    });
  }
);
