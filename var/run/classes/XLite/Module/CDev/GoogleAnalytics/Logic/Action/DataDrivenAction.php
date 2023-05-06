<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Logic\Action;

use XLite\Module\CDev\GoogleAnalytics\Core\GA;

trait DataDrivenAction
{
    protected static function getActionType(): string
    {
        return 'data-driven';
    }

    public function isApplicable(): bool
    {
        /** @noinspection PhpMultipleClassDeclarationsInspection */
        return parent::isApplicable()
            && GA::getResource()->isECommerceEnabled();
    }
}
