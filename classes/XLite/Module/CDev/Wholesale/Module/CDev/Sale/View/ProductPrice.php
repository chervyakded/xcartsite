<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Wholesale\Module\CDev\Sale\View;

/**
 * Wholesale prices for product
 *
 * @Decorator\Depend("CDev\Sale")
 */
class ProductPrice extends \XLite\Module\CDev\Wholesale\View\ProductPrice implements \XLite\Base\IDecorator
{
    /**
     * @param $firstWholesalePrice
     * @return mixed
     */
    protected function getZeroTierDisplayPrice($firstWholesalePrice)
    {
        $priceBeforeSale = $firstWholesalePrice->getOwner()->getNetPriceBeforeSale();
        return max(parent::getZeroTierDisplayPrice($firstWholesalePrice), $priceBeforeSale);
    }
}
