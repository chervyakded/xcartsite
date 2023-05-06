<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Logic\Action;

use XLite;
use XLite\Model\Cart;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;

class ViewCart extends Base\AAction
{
    /**
     * @var Cart
     */
    protected $cart;

    /**
     * Action constructor.
     *
     * @param Cart $cart
     */
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    protected static function getActionType(): string
    {
        return 'view_cart';
    }

    public function isApplicable(): bool
    {
        return parent::isApplicable()
            && GA::getResource()->isECommerceEnabled()
            && XLite::getController() instanceof XLite\Controller\Customer\Cart
            && $this->cart instanceof Cart;
    }

    protected function buildRequestData(): array
    {
        $productsData = [];

        foreach ($this->cart->getItems() as $item) {
            $productsData[] = GA::getOrderItemDataMapper()->getData($item);
        }

        return [
            'items' => $productsData,
        ];
    }

    protected function buildContext(): array
    {
        $context = parent::buildContext();

        $context['currency'] = GA::getResource()->getCurrencyCode();
        $context['value']    = $this->cart->getSubtotal();

        return $context;
    }
}
