<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces;

use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers;

interface IDataMapperRegistry
{
    public function getProductMapper(): DataMappers\IProduct;

    public function getOrderItemMapper(): DataMappers\IOrderItem;

    public function getOrderMapper(): DataMappers\IOrder;

}
