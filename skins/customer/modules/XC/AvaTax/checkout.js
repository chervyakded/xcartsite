/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Checkout
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

core.microhandlers.add(
  'avatax-blocker',
  '.avatax-data',
  function() {
    var avaTaxErrorsFlag = jQuery(this).data('avataxerrorsflag');

    if ('undefined' == typeof(arguments.callee.handleCheckoutReadyCheck)) {
      arguments.callee.handleCheckoutReadyCheck = function(event, state)
      {
        if (state.result) {
          state.result = !avaTaxErrorsFlag;
        }
      }

      arguments.callee.handleUpdateCart = function(event, data)
      {
        if ('undefined' != typeof(data.avaTaxErrorsFlag)) {
          avaTaxErrorsFlag = data.avaTaxErrorsFlag;
        }
      }
    }

    core.bind('checkout.common.readyCheck', _.bind(arguments.callee.handleCheckoutReadyCheck, arguments.callee))
      .bind('updateCart', _.bind(arguments.callee.handleUpdateCart, arguments.callee))

  }
);

core.microhandlers.add(
  'avatax-check-address',
  '.avatax-check',
  function() {
    jQuery(this).click(
      function() {
        var address = {};
        var elm = jQuery(this);
        var className = elm.hasClass('shipping') ? 'step-shipping-address' : 'step-billing-address';
        var inputPrefix = elm.hasClass('shipping') ? 'shippingAddress' : 'billingAddress';
        jQuery('.' + className + ' .form :input').each(
          function() {
            var inp = jQuery(this);
            address[inp.attr('name').replace(/(?:shipping|billing)Address/, 'address')] = inp.val();
          }
        );

        elm.prop('disabled', true).addClass('disabled');

        var checkAddressData = _.defaults(
          address,
          {
            xcart_form_id: xliteConfig.form_id
          }
        );

        core.post(
          {'target': 'checkout', 'action': 'checkAvaTaxAddress'},
          function() {
            elm.prop('disabled', false).removeClass('disabled');
          },
          checkAddressData,
          {
            dataType: 'json',
            success: function (data) {
              if (_.size(data.errors) > 0) {
                _.each(
                  data.errors,
                  function(message) {
                    core.trigger('message', {'type': 'error', 'message': message});
                  }
                );

              } else {
                var changesCount = 0;
                _.each(
                  data.address,
                  function(v, k) {
                    var inp = jQuery('.' + className + ' .form :input[name="' + inputPrefix + '[' + k + ']"]').eq(0);
                    var orig = inp.val();
                    if (inp.length > 0 && inp.val() != v) {
                      inp.val(v);
                      changesCount++;
                    }
                  }
                );

                if (changesCount > 0) {
                  jQuery('.' + className + ' form').submit();
                }
              }
            }
          }
        );

        return false;
      }
    );
  }
);

core.microhandlers.add(
  'avatax-same-address',
  '#same_address',
  function() {
    var handler = function() {
      var checked = jQuery('#same_address:checked').length > 0;
      if (checked) {
        jQuery('.avatax-check-box.billing').hide();

      } else {
        jQuery('.avatax-check-box.billing').show();
      }
    };

    jQuery(this).change(handler);
  }
);
