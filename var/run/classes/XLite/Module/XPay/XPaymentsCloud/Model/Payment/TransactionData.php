<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\Model\Payment;

use XLite\Module\XPay\XPaymentsCloud\Model\ClearCCDataTrait;

/**
 * Transaction data storage
 */
 class TransactionData extends \XLite\Model\Payment\TransactionDataAbstract implements \XLite\Base\IDecorator
{
    use ClearCCDataTrait;
}
