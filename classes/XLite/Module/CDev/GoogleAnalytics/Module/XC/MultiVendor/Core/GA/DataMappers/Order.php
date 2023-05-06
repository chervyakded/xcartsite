<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Module\XC\MultiVendor\Core\GA\DataMappers;

use XLite\Model\Base\Surcharge;
use XLite\Module\XC\MultiVendor\Main;

/**
 * @Decorator\Depend ("XC\MultiVendor")
 */
class Order extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\Order implements \XLite\Base\IDecorator
{
    public function getPurchaseData(\XLite\Model\Order $order): array
    {
        $data = parent::getPurchaseData($order);

        if (Main::isWarehouseMode()) {
            return $data;
        }

        $ids = [];

        $shippingCost = 0;

        /** @var \XLite\Model\Order|\XLite\Module\XC\MultiVendor\Model\Order $order */
        $order = $order->isChild() ? $order->getParent() : $order;

        foreach ($order->getChildren() as $child) {
            $ids[]        = $child->getOrderNumber();
            $shippingCost += $child->getSurchargeSumByType(Surcharge::TYPE_SHIPPING);
        }

        $data['id'] = implode('/', $ids);

        $data['shipping'] = $shippingCost;

        return $data;
    }
}
