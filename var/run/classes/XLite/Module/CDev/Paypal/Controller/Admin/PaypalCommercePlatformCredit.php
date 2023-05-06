<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\Controller\Admin;

use \XLite\Module\CDev\Paypal;

/**
 * Paypal Credit settings controller
 */
class PaypalCommercePlatformCredit extends \XLite\Module\CDev\Paypal\Controller\Admin\PaypalSettings
{
    /**
     * @return boolean
     */
    public function checkAccess()
    {
        return parent::checkAccess() && in_array(\XLite\Core\Config::getInstance()->Company->location_country, Paypal\Main::PP_PAYPAL_CREDIT_COUNTRIES, true);
    }

    /**
     * Get payment method
     *
     * @return \XLite\Model\Payment\Method
     */
    public function getPaymentMethod()
    {
        if (!isset($this->paymentMethod)) {
            $this->paymentMethod = Paypal\Main::getPaymentMethod(Paypal\Main::PP_METHOD_PC);
        }

        return $this->paymentMethod && static::MODULE_NAME === $this->paymentMethod->getModuleName()
            ? $this->paymentMethod
            : null;
    }

    /**
     * Return class name for the controller main form
     *
     * @return string
     */
    protected function getModelFormClass()
    {
        return 'XLite\Module\CDev\Paypal\View\Model\PaypalCredit';
    }
}
