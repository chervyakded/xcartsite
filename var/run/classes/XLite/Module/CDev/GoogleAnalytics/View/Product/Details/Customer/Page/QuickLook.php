<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\View\Product\Details\Customer\Page;

use XLite\Module\CDev\GoogleAnalytics\Logic\Action;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Base\AAction;

/**
 * Main
 */
 class QuickLook extends \XLite\View\Product\Details\Customer\Page\QuickLookAbstract implements \XLite\Base\IDecorator
{
    /**
     * Get container attributes
     */
    protected function getGAData()
    {
        return $this->getAction()->getActionData(AAction::FORMAT_JSON);
    }

    protected function getAction(): Action\ProductInfo
    {
        return new Action\ProductInfo(
            $this->getProduct()
        );
    }
}
