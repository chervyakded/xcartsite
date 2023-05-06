<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Model;

use XLite\Module\XC\MultiVendor;

/**
 * Order
 *
 * @Decorator\Depend("XC\MultiVendor")
 * @Decorator\After("XC\AvaTax")
 */
class OrderMultiVendor extends \XLite\Model\Order implements \XLite\Base\IDecorator
{
    public function isTaxOwner()
    {
        /** @var \XC\MultiVendor\Model\Order $order */
        $order = $this;
        $warehouseMode = MultiVendor\Main::isWarehouseMode();

        return (($order->isChild() && !$warehouseMode) || ($order->isParent() && $warehouseMode));
    }

    protected function isAvataxTransactionsApplicable(): bool
    {
        return parent::isAvataxTransactionsApplicable()
            && $this->isTaxOwner();
    }
}
