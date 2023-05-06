<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\Tabs;

 class FrontPage extends \XLite\View\Tabs\FrontPageAbstract implements \XLite\Base\IDecorator
{
    /**
     * @return array
     */
    protected function defineTabs()
    {
        $tabs = parent::defineTabs();

        if (\XLite\Core\Config::getInstance()->QSL->Banner->hide_banner_rotation_feature) {
            unset($tabs['banner_rotation']);
        }

        return $tabs;
    }
}
