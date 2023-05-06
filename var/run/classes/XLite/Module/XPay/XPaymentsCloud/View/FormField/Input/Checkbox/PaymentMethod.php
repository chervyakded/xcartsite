<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\FormField\Input\Checkbox;

use \XLite\Module\XPay\XPaymentsCloud\Main as XPaymentsHelper;

 class PaymentMethod extends \XLite\View\FormField\Input\Checkbox\PaymentMethodAbstract implements \XLite\Base\IDecorator
{
   /**
     * getCommonAttributes
     *
     * @return array
     */
    protected function getCommonAttributes()
    {
        $list = parent::getCommonAttributes();

        foreach (XPaymentsHelper::getWalletMethods() as $wallet) {
            if ($this->getParam(static::PARAM_METHOD_ID) == $wallet->getMethodId()) {
                $xpaymentsMethodId = XPaymentsHelper::getPaymentMethod()->getMethodId();
                $list['data-tremble-button'] = sprintf('#payment-id-%s', $xpaymentsMethodId);
            }
        }

        return $list;
    }
}
