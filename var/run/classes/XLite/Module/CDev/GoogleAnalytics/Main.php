<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics;

use XLite\Module\AModule;

abstract class Main extends AModule
{
    /** @noinspection ReturnTypeCanBeDeclaredInspection */
    public static function init()
    {
        parent::init();

        Core\Base::addCDevGASingleton();
    }

    public static function hasGdprRelatedActivity(): bool
    {
        return true;
    }
}
