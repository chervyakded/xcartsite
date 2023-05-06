<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FastLaneCheckout\View;

use \XLite\Module\XC\FastLaneCheckout;

/**
 * Checkout success page
 */
class CheckoutSuccess extends \XLite\View\CheckoutSuccess implements \XLite\Base\IDecorator
{
    /**
     * @return array
     */
    public function getJSFiles()
    {
        if (FastLaneCheckout\Main::isFastlaneEnabled()) {
            return array_merge(parent::getJSFiles(), [
                'modules/XC/FastLaneCheckout/checkout_fastlane/success.js'
            ]);
        }

        return parent::getJSFiles();
    }
}
