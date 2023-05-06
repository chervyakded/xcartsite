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
class OrderItem extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\OrderItem implements \XLite\Base\IDecorator
{
    protected static function getBrand(\XLite\Model\OrderItem $item): string
    {
        $product = $item->getObject();
        /** @var XLite\Module\QSL\ShopByBrand\Model\Product $product */
        return $product->getBrandName();
    }
}
