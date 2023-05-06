<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\BannerRotation;

 class BannerRotation extends \XLite\Module\XC\ThemeTweaker\View\BannerRotation\BannerRotation implements \XLite\Base\IDecorator
{
    /**
     * @return boolean
     */
    protected function isVisible()
    {
        return !\XLite\Core\Config::getInstance()->QSL->Banner->hide_banner_rotation_feature
            && parent::isVisible();
    }
}
