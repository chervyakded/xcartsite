/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Place order button
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function PlaceOrderButton(base)
{
  var args = Array.prototype.slice.call(arguments, 0);

  core.bind('updateCart', _.bind(this.handleUpdateCart, this));

  PlaceOrderButton.superclass.constructor.apply(this, args);
}

extend(PlaceOrderButton, ALoadable);

PlaceOrderButton.prototype.widgetTarget = 'checkout';

PlaceOrderButton.prototype.widgetClass = '\\XLite\\Module\\CDev\\Paypal\\View\\Button\\Checkout\\PlaceOrder';

PlaceOrderButton.prototype.handleUpdateCart = function(event, data)
{
  if ('undefined' != typeof(data.total)) {
    this.load();
  }
};

core.bind(
  'checkout.main.postprocess',
  function () {
    jQuery('button.pcp-hosted-fields-button-submit').each(
      function() {
        new PlaceOrderButton(this);
      }
    );
  }
);
