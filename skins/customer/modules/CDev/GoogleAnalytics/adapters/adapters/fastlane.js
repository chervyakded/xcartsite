/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * This is redundant comment to bypass headers check
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define(
  'googleAnalytics/checkout_fastlane/sections/payment/place_order',
  ['checkout_fastlane/sections/payment/place_order',
    'checkout_fastlane/sections/section_change_button',
    'ready'],
  function (PlaceOrder, SectionChangeButton) {
    PlaceOrder = SectionChangeButton.component('PlaceOrder');

    var oldPlaceOrder = PlaceOrder.options.methods.placeOrder;

    PlaceOrder = PlaceOrder.extend({
      methods: {
        placeOrder () {
          core.trigger('ga-fastlane-place', {
            callback: _.bind(oldPlaceOrder, this)
          })
        }
      }
    });

    Vue.registerComponent(SectionChangeButton, PlaceOrder);

    return PlaceOrder;
  }
);

define('googleAnalytics/adapter/fastlaneAdapter', ['googleAnalytics/adapter/base', 'js/underscore'],
  function (eCommerceCheckoutBaseAdapter, _) {
    let FastlaneCheckoutAdapter = eCommerceCheckoutBaseAdapter.extend({
      getListeners () {
        return {
          'ga-pageview-sending': this.registerCheckoutEnter,
          'ga-fastlane-place': this.handlePlaceClick,
          'fastlane_section_switched': this.sectionChanged,
          'checkout.common.ready': this.registerPlaceOrder
        }
      },

      registerCheckoutEnter () {
        if (this.isForceLoginPage()) {
          this.enteredStep('address')
        }
      },

      isForceLoginPage () {
        return jQuery('.signin-anonymous-wrapper').length !== 0
      },

      sectionChanged (event, data) {
        var oldStep = 0
        if (!_.isNull(data.oldSection) && !_.isUndefined(data.oldSection)) {
          this.completedStep(this.mapIndexToName(data.oldSection.index))
          oldStep = data.oldSection.index + 1
        }

        if (!_.isNull(data.newSection) && !_.isUndefined(data.newSection)) {
          var newStep = data.newSection.index

          for (oldStep; oldStep < newStep; oldStep++) {
            this.enteredStep(this.mapIndexToName(oldStep))
          }
          this.enteredStep(this.mapIndexToName(newStep)) // Looks like duplicate. Not sure about original logic
        }
      },

      registerPlaceOrder () {
        this.completedStep('payment')
        this.enteredStep('place')
      },

      handlePlaceClick (event, data) {
        this.completedStep('payment')
        this.enteredStep('place')

        if (this.coreInstance) {
          core.bind('ga-event-sent', data.callback)
          _.delay(data.callback, 1000)
        } else {
          data.callback()
        }
      },

      mapIndexToName (index) {
        const map = [
          'address',
          'shipping',
          'payment',
          'place',
          'complete'
        ]

        return map[index]
      },

      _getPaymentMethodName () {
        if (_.isUndefined(window.Checkout)) {
          return ''
        }

        const order = Checkout.instance.getState().order
        const id = order.payment_method
        return jQuery('#pmethod' + parseInt(id)).siblings('.payment-title').text()
      },

      _getShippingMethodName () {
        if (_.isUndefined(window.Checkout)) {
          return ''
        }

        const order = Checkout.instance.getState().order
        const id = order.shipping_method
        return window.shippingMethodsList[parseInt(id)]
      }

    })

    FastlaneCheckoutAdapter.instance = new FastlaneCheckoutAdapter()

    return FastlaneCheckoutAdapter;
  }
);
