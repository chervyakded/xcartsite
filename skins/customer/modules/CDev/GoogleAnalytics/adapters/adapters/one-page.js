/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/adapter/opc', ['googleAnalytics/adapter/base', 'js/underscore'],
  function (eCommerceCheckoutBaseAdapter, _) {
    let OnePageCheckoutAdapter = eCommerceCheckoutBaseAdapter.extend({
      namespace: 'Checkout',

      getListeners () {
        return {
          'ga-pageview-sending': this.registerCheckoutEnter,
          'checkout.common.ready': this.registerPlaceOrder
        }
      },

      registerCheckoutEnter () {
        this.enteredStep('address')

        if (!this.isForceLoginPage()) {
          this.enteredStep('shipping')
          this.enteredStep('payment')
        }
      },

      registerPlaceOrder () {
        this.completedStep('address')
        this.completedStep('shipping')
        this.completedStep('payment')

        this.enteredStep('place')
      },

      isForceLoginPage () {
        return jQuery('.signin-anonymous-wrapper').length !== 0
      },

      _getPaymentMethodName () {
        return jQuery('.step-payment-methods input[name="methodId"]:checked').siblings('.payment-title').text()
      },

      _getShippingMethodName () {
        return jQuery('.step-shipping-methods input[name="methodId"]:checked').siblings('.rate-title').text()
      }
    })

    OnePageCheckoutAdapter.instance = new OnePageCheckoutAdapter()

    return OnePageCheckoutAdapter;
  }
);
