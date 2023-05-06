<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Logic\Action\Backend;

use XLite\Model\Order;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Interfaces\IBackendAction;

class Refund extends Action\Base\ABackendAction implements IBackendAction
{
    /**
     * @var Order|\XLite\Module\CDev\GoogleAnalytics\Model\Order
     */
    protected $order;

    /**
     * @var array
     */
    protected $itemsRefunded;

    public function __construct(Order $order, array $itemsRefunded = [])
    {
        $this->order         = $order;
        $this->itemsRefunded = $itemsRefunded;
    }

    public static function getEventCategory(): string
    {
        return 'Checkout';
    }

    public static function getEventActionName(): string
    {
        return 'Refund';
    }

    public static function getEventAction(): string
    {
        return 'refund';
    }

    public function isBackendApplicable(): bool
    {
        return parent::isBackendApplicable()
            && $this->order;
    }

    public function getClientId(): string
    {
        return $this->order->getGaClientId() ?: parent::getClientId();
    }

    protected function buildRequestData(): array
    {
        $products = [];
        $changes  = [];
        $counter  = 1;
        if ($this->itemsRefunded) {
            foreach ($this->itemsRefunded as $itemRefund) {
                $products[] = GA::getOrderItemDataMapper()->getDataForBackend($itemRefund['item'], abs($itemRefund['change']), $counter++);
            }
        } else {
            $changes['revenue'] = $this->order->getTotal();
        }

        return GA::getOrderDataMapper()->getChangeDataForBackend($this->order, $changes, $products);
    }
}
