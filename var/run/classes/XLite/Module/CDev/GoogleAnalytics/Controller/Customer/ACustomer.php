<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Controller\Customer;

use XLite\Module\CDev\GoogleAnalytics\Model\Profile;

/**
 * Class ACustomer
 */
 class ACustomer extends \XLite\Module\CDev\Paypal\Controller\Customer\ACustomer implements \XLite\Base\IDecorator
{
    /**
     * @param array $old
     * @param array $new
     *
     * @return array
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    protected function getCartFingerprintDifference(array $old, array $new)
    {
        $result = parent::getCartFingerprintDifference($old, $new);

        $cellKeys = [
            'shippingMethodName',
            'paymentMethodName',
        ];

        foreach ($cellKeys as $name) {
            $old[$name] = $old[$name] ?? '';
            $new[$name] = $new[$name] ?? '';

            if ($old[$name] !== $new[$name]) {
                $result[$name] = $new[$name];
            }
        }

        return $result;
    }

    /** @noinspection ReturnTypeCanBeDeclaredInspection */
    protected function updateCart($silent = false)
    {
        parent::updateCart($silent);

        /** @var Profile $profile */
        $profile = $this->getCart()->getProfile();

        if ($profile && $this->parseClientIdCookie()) {
            $profile->setGaClientId($this->parseClientIdCookie());
            $profile->update();
        }
    }

    protected function parseClientIdCookie(): ?string
    {
        $cid = null;

        if (isset($_COOKIE['_ga'])) {
            @list(,, $cid1, $cid2) = explode('.', $_COOKIE["_ga"], 4);
            $contents = [
                'cid'         => $cid1 . '.' . $cid2,
            ];

            $cid = $contents['cid'];
        }

        return $cid;
    }
}
