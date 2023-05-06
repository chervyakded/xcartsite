<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\View\Checkout\Step;

/**
 * Shipping step
 */
class Shipping extends \XLite\View\Checkout\Step\Shipping implements \XLite\Base\IDecorator
{
    /**
     * Check - step is complete or not
     *
     * @return boolean
     */
    public function isCompleted()
    {
        return parent::isCompleted()
            && !$this->getCart()->isAvaTaxForbidCheckout();
    }

    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        $list[] = 'modules/XC/AvaTax/checkout.js';

        return $list;
    }

    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'modules/XC/AvaTax/checkout.less';

        return $list;
    }

    /**
     * Check - AvaTax address verification is enabled or not
     * 
     * @return boolean
     */
    protected function isAvaTaxAddressVerificationEnabled()
    {
        return \XLite\Module\XC\AvaTax\Core\TaxCore::getInstance()->isValid()
            && \XLite\Core\Config::getInstance()->XC->AvaTax->addressverif;
    }
}
