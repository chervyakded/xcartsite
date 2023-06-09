/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Additional product page controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

(function () {

    let subscriptionChangeCallback = function(status) {
        jQuery('#fee')      .closest('li').toggle(status);
        jQuery('#plan')     .closest('li').toggle(status);
        jQuery('#reverse')  .closest('li').toggle(status);
        jQuery('#periods')  .closest('li').toggle(status);
        jQuery('#calculate-shipping')
            .closest('li').toggle(status);

        let hasTrial = jQuery('#has-trial-period');
        hasTrial.closest('li').toggle(status);
        if (hasTrial.is(':checked')) {
          jQuery('#trial').closest('li').toggle(status);
        } else {
          jQuery('#setup-fee').closest('li').toggle(status);
        }
    };

    let changeModeCallback = function(status) {
      jQuery('#trial').closest('li').toggle(status);
      jQuery('#setup-fee').closest('li').toggle(!status);
    };

    core.bind(
        'load',
        function () {

            let hasTrial = jQuery('#has-trial-period');
            hasTrial.click(function() {
                changeModeCallback(jQuery(this).is(':checked'));
            });
            changeModeCallback(hasTrial.is(':checked'));

            let subscription_field = jQuery('#is-subscription');
            subscription_field.bind(
                'click',
                function () {
                    subscriptionChangeCallback(jQuery(this).is(':checked'));
                }
            );

            subscriptionChangeCallback(subscription_field.is(':checked'));
        }
    )
})();
