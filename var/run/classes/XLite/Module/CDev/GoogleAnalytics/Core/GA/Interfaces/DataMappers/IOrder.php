<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers;

use XLite\Model\Order;

interface IOrder extends ICommon
{
    /**
     * Get purchase order data
     *
     * @param Order $order
     *
     * @return array
     */
    public function getPurchaseData(Order $order): array;

    public function getChangeData(Order $order, array $change): array;

    public function getPurchaseDataForBackend(Order $order, array $products = []): array;

    public function getChangeDataForBackend(Order $order, array $change = [], array $products = []): array;
}
