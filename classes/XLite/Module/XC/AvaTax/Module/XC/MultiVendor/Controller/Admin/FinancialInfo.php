<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Module\XC\MultiVendor\Controller\Admin;

use Includes\Annotations\Decorator;


/**
 * FinancialInfo
 *
 * @Decorator\Depend("XC\MultiVendor")
 */
class FinancialInfo extends \XLite\Module\XC\MultiVendor\Controller\Admin\FinancialInfo implements \XLite\Base\IDecorator
{
    /**
     * @throws \Exception
     */
    protected function doActionModify()
    {
        parent::doActionModify();

        $this->updateEnabledUsTaxStates();
    }

    /**
     * @throws \Exception
     */
    protected function updateEnabledUsTaxStates()
    {
        $calculateFor = \XLite\Core\Request::getInstance()->us_tax_calculate_for;

        \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
            'vendor' => $this->getProfile(),
            'category' => 'XC\\MultiVendor',
            'name' => 'us_tax_calculate_for',
            'value' => $calculateFor ?: \XLite\Module\XC\AvaTax\View\FormField\Select\AutomaticTaxCalculateType::PARAM_ALL_STATES
        ]);

        $states = \XLite\Core\Request::getInstance()->us_tax_states;

        if (!empty($states) && is_array($states)) {
            \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
                'vendor' => $this->getProfile(),
                'category' => 'XC\\MultiVendor',
                'name' => 'us_tax_states',
                'value' => @serialize(array_map('mb_strtoupper', $states))
            ]);
        } else {
            \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
                'vendor' => $this->getProfile(),
                'category' => 'XC\\MultiVendor',
                'name' => 'us_tax_states',
                'value' => ''
            ]);
        }
    }
}