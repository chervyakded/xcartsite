<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FreeShipping\Module\XC\CanadianTaxes\Logic\Order\Modifier;

/**
 * Tax business logic
 *
 * @Decorator\Depend("XC\CanadianTaxes")
 */
class Tax extends \XLite\Module\XC\CanadianTaxes\Logic\Order\Modifier\Tax implements \XLite\Base\IDecorator
{
    /**
     * @param \XLite\Model\OrderItem $item
     *
     * @return boolean
     */
    public function canShippingCalculated(\XLite\Model\OrderItem $item)
    {
        return $item->isShipForFree() ? false : parent::canShippingCalculated($item);
    }
}
