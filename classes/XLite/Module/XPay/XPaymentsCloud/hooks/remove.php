<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    /**
     * We use 'XPaymentsApplePay' and etc string literals here instead of the
     * XLite\Module\XPay\XPaymentsCloud\Main::APPLE_PAY_SERVICE_NAME constants
     * because disabled module doesn't have access to its own constants.
     */

    $pmApplePay = \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')
        ->findOneBy(['service_name' => 'XPaymentsApplePay']);
    if ($pmApplePay) {
        $pmApplePay->delete();
    }

    $pmGooglePay = \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')
        ->findOneBy(['service_name' => 'XPaymentsGooglePay']);
    if ($pmGooglePay) {
        $pmGooglePay->delete();
    }
};
