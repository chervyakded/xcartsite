<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Module\XC\MultiVendor\Model;

use XLite\Model\Base\Surcharge;
use XLite\Module\XC\AvaTax\Logic\Order\Modifier\StateTax;

/**
 * Commission
 *
 * @Decorator\Depend("XC\MultiVendor")
 */
class Commission extends \XLite\Module\XC\MultiVendor\Model\Commission implements \XLite\Base\IDecorator
{
    protected function getCommissionSalesTaxValue()
    {
        $result = parent::getCommissionSalesTaxValue();
        $order = $this->getOrder();
        $surcharges = $order->getSurchargesByType(Surcharge::TYPE_TAX);

        foreach ($surcharges as $surcharge) {
            /* @var \XLite\Model\Order\Surcharge $surcharge */
            if ($this->canApplyAvaTaxTax($surcharge)) {
                $result += $order->getCurrency()->roundValue($surcharge->getValue());
            }
        }

        return $result;
    }

    protected function canApplyAvaTaxTax(\XLite\Model\Order\Surcharge $surcharge)
    {
        return $surcharge->getModifier()
            && $surcharge->getModifier()->getModifier()->getCode() === StateTax::MODIFIER_CODE
            && $surcharge->getAvailable()
            && !$surcharge->getInclude();
    }
}