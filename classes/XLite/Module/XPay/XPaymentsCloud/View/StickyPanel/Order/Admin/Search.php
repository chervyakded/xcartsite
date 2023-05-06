<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\StickyPanel\Order\Admin;

use XLite\Module\XPay\XPaymentsCloud\Main as XPaymentsHelper;

/**
 * Orders list panel
 */
class Search extends \XLite\View\StickyPanel\Order\Admin\Search implements \XLite\Base\IDecorator
{
    /**
     * Check if X-Payment Cloud payment method is enabled
     *
     * @return bool
     */
    protected static function isXpaymentsEnabled()
    {
        return XPaymentsHelper::getPaymentMethod()
            && XPaymentsHelper::getPaymentMethod()->isEnabled();
    }

    /**
     * Define buttons 
     *
     * @return array
     */
    protected function defineButtons()
    {
        $list = parent::defineButtons();

        if (static::isXpaymentsEnabled()) {

            $batchId = \XLite\Core\Database::getRepo('XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation')
                ->getActiveBatchId(\XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation::OPERATION_CAPTURE);

            if (empty($batchId)) {

                $list['xpayments_bulk_capture'] = $this->getWidget(
                    array(),
                    'XLite\Module\XPay\XPaymentsCloud\View\Button\BulkOperation\Capture'
                );

            } else {

                $list['xpayments_bulk_progress'] = $this->getWidget(
                    array(),
                    'XLite\Module\XPay\XPaymentsCloud\View\BulkOperation\Progress'
                );

                $list['xpayments_bulk_progress_stop'] = $this->getWidget(
                    array(),
                    'XLite\Module\XPay\XPaymentsCloud\View\Button\BulkOperation\Stop'
                );
            }
        }

        return $list;
    }
}
