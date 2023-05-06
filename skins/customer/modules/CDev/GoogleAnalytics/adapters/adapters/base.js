/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/adapter/base', ['googleAnalytics/eCommerceCoreEvent', 'js/underscore'],
  function (eCommerceCoreEvent, _) {
    return eCommerceCoreEvent.extend({
      enteredStep (step) {
        let eventData = this.getEnteredDataByStep(step)
        core.trigger('ga-checkout-step-entered', eventData)
      },

      completedStep (step) {
        let eventData = this.getCompletedDataByStep(step)

        core.trigger('ga-checkout-step-completed', eventData)
      },

      getEnteredDataByStep (step) {
        return {
          step
        }
      },

      getCompletedDataByStep (step) {
        return {
          step,
          option: this.getOptionBySection(step)
        }
      },

      getOptionBySection (sectionName) {
        if (sectionName === 'address') {
          return 'Address chosen'

        } else if (sectionName === 'shipping') {
          return this._getShippingMethodName()

        } else if (sectionName === 'payment') {
          return this._getPaymentMethodName()
        }

        return sectionName + ' completed'
      },

      _getShippingMethodName () {
      },
      _getPaymentMethodName () {
      }
    });
  }
);
