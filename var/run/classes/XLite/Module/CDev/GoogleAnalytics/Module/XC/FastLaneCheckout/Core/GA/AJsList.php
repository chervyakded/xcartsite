<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Module\XC\FastLaneCheckout\Core\GA;

use XLite\Module\XC\FastLaneCheckout;

/**
 * @Decorator\Depend ("XC\FastLaneCheckout")
 */
abstract class AJsList extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\AJsListAbstract implements \XLite\Base\IDecorator
{
    protected function getCheckoutTrackingList(): array
    {
        if (!$this->needsFastlaneJs()) {
            return parent::getCheckoutTrackingList();
        }

        return $this->getFastlaneCheckoutTrackingList();
    }

    protected function needsFastlaneJs(): bool
    {
        return FastLaneCheckout\Main::isFastlaneEnabled();
    }

    /**
     * @return string[]
     */
    protected function getFastlaneCheckoutTrackingList(): array
    {
        return [
            'modules/CDev/GoogleAnalytics/adapters/adapters/base.js',
            'modules/CDev/GoogleAnalytics/adapters/adapters/fastlane.js',
        ];
    }
}
