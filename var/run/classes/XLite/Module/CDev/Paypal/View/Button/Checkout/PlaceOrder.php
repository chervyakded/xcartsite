<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\Button\Checkout;

use Includes\Utils\Module\Manager;

/**
 * Place order
 */
class PlaceOrder extends \XLite\View\Button\Submit
{
    /**
     * Get JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        if (
            Manager::getRegistry()->isModuleEnabled('XC-FastLaneCheckout')
            && \XLite\Module\XC\FastLaneCheckout\Main::isFastlaneEnabled()
        ) {
            $list[] = 'modules/CDev/Paypal/button/paypal_commerce_platform/place_order.js';
        }

        return $list;
    }

    /**
     * @return string
     */
    protected function getDefaultLabel()
    {
        $cart = $this->getCart();

        $value = $cart->getFirstOpenPaymentTransaction()
            ? $cart->getFirstOpenPaymentTransaction()->getValue()
            : $cart->getTotal();

        return static::t(
            'Place order X',
            [
                'total' => $this->formatPrice(
                    $value,
                    $cart->getCurrency(),
                    true
                ),
            ]
        );
    }

    /**
     * Get default style
     *
     * @return string
     */
    protected function getDefaultStyle()
    {
        return trim(parent::getDefaultStyle() . ' btn regular-button regular-main-button place-order pcp-hosted-fields-button-submit');
    }
}
