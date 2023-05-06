<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Module\QSL\ShopByBrand\Core\GA\DataMappers;

use XLite;

/**
 * @Decorator\Depend("QSL\ShopByBrand")
 */
class Product extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\Product implements \XLite\Base\IDecorator
{
    protected static function getBrand(XLite\Model\Product $product): string
    {
        /** @var XLite\Module\QSL\ShopByBrand\Model\Product $product */
        return $product->getBrandName();
    }
}
