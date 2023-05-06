/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Sticky panel controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

(function() {
    let oldFormat = jQuery('#card-number-display-format').val();
    let newFormat = '';
    const confirmCallback = function(event) {
        event.preventDefault();

        const result = confirm(core.t('Now the first 6 digits and expiration date for the previously stored credit card data will be deleted from the database. Proceed?'));

        if (result) {
            const form = jQuery(event.target).parents('form').eq(0);
            form.submit();
        }
    }

    decorate(
        'StickyPanel',
        'markAsChanged',
        function (event, data) {
            arguments.callee.previousMethod.apply(this, arguments);

            newFormat = jQuery('#card-number-display-format').val();

            if ('U' === oldFormat && 'M' === newFormat) {
                jQuery('button.submit').on('click', confirmCallback);
            } else if ('M' === oldFormat && 'U' === newFormat) {
                jQuery('button.submit').off('click', confirmCallback);
            }

            oldFormat = jQuery('#card-number-display-format').val();
        }
    );

    decorate(
        'StickyPanel',
        'unmarkAsChanged',
        function (event, data) {
            arguments.callee.previousMethod.apply(this, arguments);

            newFormat = jQuery('#card-number-display-format').val();

            if ('M' === oldFormat && 'U' === newFormat) {
                jQuery('button.submit').off('click', confirmCallback);
            }

            oldFormat = jQuery('#card-number-display-format').val();

        }
    );
})();
