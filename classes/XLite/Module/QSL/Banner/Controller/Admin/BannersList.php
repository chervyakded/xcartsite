<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Controller\Admin;

use XLite\Core\TopMessage;

/**
 * Banner modify
 *
 */
class BannersList extends \XLite\Controller\Admin\Settings
{
    const PERMISSION_BANNERS = 'manage banners';

    /**
     * Check ACL permissions
     *
     * @return boolean
     */
    public function checkACL()
    {
        return parent::checkACL()
            || \XLite\Core\Auth::getInstance()->isPermissionAllowed(static::PERMISSION_BANNERS);
    }

    /**
     * Return the current page title (for the content area)
     *
     * @return string
     */
    public function getTitle()
    {
        return static::t('Banners list');
    }

    /**
     * Common method to determine current location
     *
     * @return string
     */
    public function getLocation()
    {
        return static::t('Banners list');
    }

    /**
     * Update banners list
     *
     * @return void
     */
    public function doActionUpdate()
    {
        $list = new \XLite\Module\QSL\Banner\View\ItemsList\Model\Banner;
        $list->processQuick();

        TopMessage::addInfo('The banners list has been successfully updated');
    }
}
