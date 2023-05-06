<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\OrderItem;

use XLite\Model\OrderItem;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\AMapper;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers\ICommon;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers\IOrderItem;

class GA4Gtag extends AMapper implements IOrderItem
{
    protected static function keys(): array
    {
        return \XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\Product\GA4Gtag::keys();
    }

    public function getDataForBackend(OrderItem $item, $qty = null, int $index = 1): array
    {
        $data = $this->getData($item);

        if ($qty) {
            $data['quantity'] = $qty;
        }

        return $data;
    }

    public function getData(OrderItem $item): array
    {
        return static::map($this->getInstance()->getData($item));
    }

    /**
     * @return ICommon|IOrderItem
     */
    protected function getInstance(): ICommon
    {
        return $this->instance;
    }
}
