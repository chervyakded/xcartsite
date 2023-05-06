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

/**
 * Class FullPurchaseAdmin
 */
class FullPurchaseAdmin extends Action\Base\ABackendAction implements IBackendAction
{
    /**
     * @var Order|\XLite\Module\CDev\GoogleAnalytics\Model\Order
     */
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public static function getEventCategory(): string
    {
        return 'Checkout';
    }

    public static function getEventActionName(): string
    {
        return 'Purchase';
    }

    public static function getEventAction(): string
    {
        return 'purchase';
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
        $counter  = 1;
        foreach ($this->order->getItems() as $item) {
            $products[] = GA::getOrderItemDataMapper()->getDataForBackend($item, null, $counter++);
        }

        return GA::getOrderDataMapper()->getPurchaseDataForBackend($this->order, $products);
    }
}
