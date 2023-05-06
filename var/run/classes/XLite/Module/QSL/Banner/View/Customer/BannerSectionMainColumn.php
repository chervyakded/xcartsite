<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\Customer;

use XLite\Core\Layout;

/**
 * Banner box widget
 *
 * @ListChild (list="sidebar.first", zone="customer", weight="110")
 * @ListChild (list="sidebar.single", zone="customer", weight="110")
 */
class BannerSectionMainColumn extends \XLite\Module\QSL\Banner\View\Customer\ABannerSection
{
    protected $location = 'MainColumn';

    /**
     * @return bool
     */
    protected function isVisible()
    {
       return parent::isVisible()
           && (($this->viewListName == 'sidebar.single')
               && Layout::getInstance()->isSidebarFirstVisible()
               || ($this->viewListName == 'sidebar.first'));
    }

}
