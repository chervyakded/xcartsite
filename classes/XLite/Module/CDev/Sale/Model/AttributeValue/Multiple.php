<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Sale\Model\AttributeValue;

abstract class Multiple extends \XLite\Model\AttributeValue\Multiple implements \XLite\Base\IDecorator
{
    /**
     * Get price modifier base value
     *
     * @return float
     */
    protected function getModifierBasePrice()
    {
        return $this->getProduct()->getParticipateSale() ? $this->getProduct()->getSalePriceValue() : parent::getModifierBasePrice();
    }
}
