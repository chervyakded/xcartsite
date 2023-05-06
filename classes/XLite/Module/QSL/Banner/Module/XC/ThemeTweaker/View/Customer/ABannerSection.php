<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Module\XC\ThemeTweaker\View\Customer;

use XLite\Module\XC\ThemeTweaker;

/**
 * @Decorator\Depend ("XC\ThemeTweaker")
 */
abstract class ABannerSection extends \XLite\Module\QSL\Banner\View\Customer\ABannerSection implements ThemeTweaker\View\LayoutBlockInterface, \XLite\Base\IDecorator
{
    use ThemeTweaker\View\LayoutBlockTrait;

    /**
     * @return string
     */
    protected function getDefaultDisplayName()
    {
        return static::t('Banners');
    }
}
