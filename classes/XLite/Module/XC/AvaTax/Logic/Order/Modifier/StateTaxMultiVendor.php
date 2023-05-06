<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Logic\Order\Modifier;

use XLite\Core\Config;
use XLite\Model\Profile;
use XLite\Module\XC\MultiVendor\Main;
use XLite\Module\XC\MultiVendor\Model\Commission;

/**
 * State tax
 *
 * @Decorator\Rely("XC\MultiVendor")
 */
class StateTaxMultiVendor extends \XLite\Module\XC\AvaTax\Logic\Order\Modifier\StateTax implements \XLite\Base\IDecorator
{
    /**
     * Calculate
     *
     * @return \XLite\Model\Order\Surcharge[]
     */
    public function calculate()
    {
        /** @var \XC\MultiVendor\Model\Order $order */
        $order = $this->getOrder();
        $warehouseMode = Main::isWarehouseMode();

        return (($order->isChild() && !$warehouseMode) || ($order->isParent() && $warehouseMode))
            ? parent::calculate()
            : null;
    }
    /**
     * @param Profile $profile
     *
     * @return array
     */
    protected function getUsAvailableStatesForVendor(Profile $profile)
    {
        $states = @unserialize(
            Main::getVendorConfiguration($profile, ['XC', 'MultiVendor'])->us_tax_states
        );

        return $states ?: [];
    }

    protected function getUsAvailableStates()
    {
        return $this->isUseVendorUsAvailableStates()
            ? $this->getUsAvailableStatesForVendor($this->getOrder()->getVendor())
            : parent::getUsAvailableStates();
    }

    /**
     * @return bool
     */
    protected function isUseVendorUsAvailableStates()
    {
        return !\XLite\Module\XC\MultiVendor\Main::isWarehouseMode()
            && Config::getInstance()->XC->MultiVendor->taxes_owner === Commission::TAXES_OWNER_VENDOR
            && $this->getOrder()->getVendor();
    }

    /**
     * @param Profile $profile
     *
     * @return bool
     */
    protected function isCalculationForSpecificStatesForVendor(Profile $profile)
    {
        return Main::getVendorConfiguration($profile, ['XC', 'MultiVendor'])->us_tax_calculate_for
                == \XLite\Module\XC\AvaTax\View\FormField\Select\AutomaticTaxCalculateType::PARAM_SPECIFIC_STATES;
    }

    /**
     * Check if calculation for specific states
     *
     * @return bool
     */
    protected function isCalculationForSpecificStates()
    {
        return $this->isUseVendorUsAvailableStates()
            ? $this->isCalculationForSpecificStatesForVendor($this->getOrder()->getVendor())
            : parent::isCalculationForSpecificStates();
    }
}
