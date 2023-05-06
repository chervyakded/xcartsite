<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Controller\Admin;

use XLite\Module\XC\AvaTax\Core\TaxCore;

class Order extends \XLite\Controller\Admin\Order implements \XLite\Base\IDecorator
{
    protected function doActionUpdate()
    {
        parent::doActionUpdate();

        $this->orderUpdatedCallback(
            $this->getOrderChanges(),
            $this->getOrder()
        );
    }

    /**
     * @param array              $diff
     * @param \XLite\Model\Order $order
     */
    protected function orderUpdatedCallback(array $diff, \XLite\Model\Order $order)
    {
        if ($diff && TaxCore::getInstance()->isValid() && $order->hasAvataxTaxes()) {
            TaxCore::getInstance()->adjustTransactionRequest($order, TaxCore::OTHER, print_r($diff, true));
        }
    }
}
