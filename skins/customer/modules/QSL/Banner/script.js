/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * script.js
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

$(document).ready(function () {
    decorate(
        'ProductsListView',
        'openQuickLookParams',
        function (elem) {
            var params = arguments.callee.previousMethod.apply(this, arguments);
            params.ignoreCycle2Lib = true;

            return params;
        }
    );
});