<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core;

/**
 * Base class
 */
 class Base extends \XLite\BaseAbstract implements \XLite\Base\IDecorator
{
    public static function addCDevGASingleton(): void
    {
        static::$singletons['CDevGA'] = GA::class;
    }
}
