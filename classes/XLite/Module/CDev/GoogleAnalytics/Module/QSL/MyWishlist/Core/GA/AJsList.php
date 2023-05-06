<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Module\QSL\MyWishlist\Core\GA;

/**
 * @Decorator\Depend("QSL\MyWishlist")
 */
class AJsList extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\AJsList implements \XLite\Base\IDecorator
{
    protected function defineEcommerceJsList(): array
    {
        $list = parent::defineEcommerceJsList();

        $list[] = 'modules/CDev/GoogleAnalytics/library/src/ecommerce/ga-ec-wishlist.js';

        return $list;
    }
}
