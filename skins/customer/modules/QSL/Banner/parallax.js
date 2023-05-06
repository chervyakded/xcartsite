/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * parallax.js
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

(function(){
    $(document).ready(function () {
        var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);

        if(iOS){
            $('body').addClass('iOS');
        }
    })
})();