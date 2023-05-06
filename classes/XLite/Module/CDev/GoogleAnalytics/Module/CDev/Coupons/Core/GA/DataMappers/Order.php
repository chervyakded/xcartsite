<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Module\CDev\Coupons\Core\GA\DataMappers;

/**
 * @Decorator\Depend ("CDev\Coupons")
 */
class Order extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\Order implements \XLite\Base\IDecorator
{
    public function getPurchaseData(\XLite\Model\Order $order): array
    {
        $result = parent::getPurchaseData($order);

        /** @var \XLite\Model\Order|\XLite\Module\CDev\Coupons\Model\Order $order */
        $coupons = $order->getUsedCoupons()->map(function ($coupon) {
            return $coupon->getPublicCode();
        })->toArray();

        if ($coupons) {
            $result['coupon'] = implode(', ', $coupons);
        }

        return $result;
    }
}
