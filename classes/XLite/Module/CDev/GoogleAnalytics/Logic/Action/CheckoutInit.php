<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Logic\Action;

use XLite;
use XLite\Controller\Customer\Checkout;
use XLite\Model\Cart;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;

class CheckoutInit extends Base\AAction
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
        return 'checkout';
    }

    public function isApplicable(): bool
    {
        return parent::isApplicable()
            && GA::getResource()->isECommerceEnabled()
            && XLite::getController() instanceof Checkout
            && $this->cart instanceof Cart;
    }

    protected function buildRequestData(): array
    {
        $cartData     = $this->cart->getEventFingerprint();
        $productsData = [];

        foreach ($this->cart->getItems() as $item) {
            $productsData[] = GA::getOrderItemDataMapper()->getData($item);
        }

        $actionData = [];

        return [
            'products'        => $productsData,
            'actionData'      => (object) $actionData,
            'shipping_method' => $this->cart->getShippingMethodName(),
            'shipping_value'  => $cartData['shippingTotal'],
            'payment_method'  => $this->cart->getPaymentMethodName(),
        ];
    }
}
