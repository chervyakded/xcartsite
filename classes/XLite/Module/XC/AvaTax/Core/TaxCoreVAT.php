<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Core;

/**
 * AcaTax client
 *
 * @Decorator\Depend ("CDev\VAT")
 */
class TaxCoreVAT extends \XLite\Module\XC\AvaTax\Core\TaxCore implements \XLite\Base\IDecorator
{
    /**
     * Get information
     *
     * @param \XLite\Model\Order $order     Order
     * @param array              &$messages Error messages
     *
     * @return array
     */
    protected function getInformation(\XLite\Model\Order $order, array &$messages)
    {
        $post = parent::getInformation($order, $messages);

        if (
            $post
            && $order->getProfile()
            && $order->getProfile()->getBillingAddress()
            && $order->getProfile()->getBillingAddress()->getterProperty('vat_number')
        ) {
            $post['BusinessIdentificationNo'] = $order->getProfile()->getBillingAddress()->getterProperty('vat_number');
        }

        return $post;
    }
}
