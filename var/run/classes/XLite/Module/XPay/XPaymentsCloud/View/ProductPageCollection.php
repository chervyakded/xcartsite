<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View;

/**
 * Product page widgets collection
 */
 class ProductPageCollection extends \XLite\View\ProductPageCollectionAbstract implements \XLite\Base\IDecorator
{
    /**
     * Register the view classes collection
     *
     * @return array
     */
    protected function defineWidgetsCollection()
    {
        $widgets = parent::defineWidgetsCollection();

        $widgets = array_merge(
            $widgets,
            array(
                '\XLite\Module\XPay\XPaymentsCloud\View\Product\BuyWithWalletPriceUpdate',
            )
        );

        return array_unique($widgets);
    }
}
