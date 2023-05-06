<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\Button\Minicart;

use \XLite\Module\XPay\XPaymentsCloud\Core\Wallets as XPaymentsWallets;

/**
 * Minicart buttons separator
 *
 * @ListChild (list="minicart.horizontal.buttons", weight="75")
 */
class SeparatorCheckoutWithApplePay extends \XLite\Module\XPay\XPaymentsCloud\View\Button\AWalletSeparator
{
    /**
     * Returns Wallet ID of wallet used for checkout
     *
     * @return string
     */
    protected function getWalletId()
    {
        return 'applePay';
    }

    /**
     * Checks if Checkout with Apple Pay is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && $this->getNotEmptyCart();
    }
}
