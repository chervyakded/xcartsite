/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Checkout steps events
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('googleAnalytics/eCommerceCheckoutStepsEvent', [ 'googleAnalytics/base/eCommerceCheckoutStepsEvent', 'googleAnalytics/event' ], function(eCommerceCheckoutStepBaseEvent, Event) {
  let eCommerceCheckoutStepEvent = eCommerceCheckoutStepBaseEvent.extend({
    _handleStepEntered(step, data, actionData) {
      switch (step) {
        case this.ADDRESS_STEP:
          this._registerECommerceCheckout(actionData.products, {step: 1})
          this._registerCheckoutEvent('Checkout entered')
          break;

        case this.SHIPPING_STEP:
          let actionDataLocal = {
            step: 2
          }

          if (!_.isUndefined(actionData.data.shipping_method)) {
            actionDataLocal.option = actionData.data.shipping_method;
          }

          this._registerECommerceCheckout(actionData.products, actionDataLocal)
          this._registerCheckoutEvent('Checkout continue')
          break;

        case this.PAYMENT_STEP:
          this._registerECommerceCheckout(actionData.products, {step: 3})
          this._registerCheckoutEvent('Checkout continue')
          break;

        case this.PLACE_STEP:
          this._registerECommerceCheckout(actionData.products, {step: 4})
          this._registerCheckoutEvent('Checkout continue')
          break;

        case this.COMPLETE_STEP:
          break;
      }
    },

    _handleStepCompleted(step, data, actionData) {
      switch (step) {
        case this.ADDRESS_STEP:
          this.sendCheckoutOption({
            step: 1,
            option: "Address choosen"
          })
          break;

        case this.SHIPPING_STEP:
          this.sendCheckoutOption({
            step: 2,
            option: data.option
          })
          break;

        case this.PAYMENT_STEP:
          this.sendCheckoutOption({
            step: 3,
            option: data.option
          })
          break;

        case this.PLACE_STEP:
          this.sendCheckoutOption({
            step: 4,
            option: data
          })
          break;

        case this.COMPLETE_STEP:
          this._registerECommerceCheckout(actionData.products, {step: 5})
          this._registerCheckoutEvent('Checkout success')
          break;
      }
    },

    _registerECommerceCheckout(productsData, actionData) {
      const self = this
      _.each(productsData, function (product) {
        self.sendECEvent('addProduct', product)
      });

      this.sendECEvent('checkout', actionData || {}, true)
    },

    _registerCheckoutEvent(data) {
      this.sendEvent('Checkout', data)
    },

    sendCheckoutOption(data) {
      this._sendCheckoutOption(data);

      this._registerCheckoutEvent('Option');
    },

    _sendCheckoutOption(data) {
      if (!data || _.isUndefined(data.option)) {
        return;
      }

      this.sendECEvent('checkout_option', data, true)
    },
  });

  eCommerceCheckoutStepEvent.instance = new eCommerceCheckoutStepEvent();

  return eCommerceCheckoutStepEvent;
});
