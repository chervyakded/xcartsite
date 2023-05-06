<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\Order;

use XLite\Model\Order;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\AMapper;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers\ICommon;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers\IOrder;

class UAGA extends AMapper implements IOrder
{
    public function getPurchaseData(Order $order): array
    {
        return $this->getInstance()->getPurchaseData($order);
    }

    public function getChangeData(Order $order, array $change): array
    {
        return $this->getInstance()->getChangeData($order, $change);
    }

    public function getPurchaseDataForBackend(Order $order, array $products = []): array
    {
        return $this->getInstance()->getPurchaseDataForBackend($order, $products);
    }

    public function getChangeDataForBackend(Order $order, array $change = [], array $products = []): array
    {
        return $this->getInstance()->getChangeDataForBackend($order, $change, $products);
    }

    /**
     * @return ICommon|IOrder
     */
    protected function getInstance(): ICommon
    {
        return $this->instance;
    }
}
