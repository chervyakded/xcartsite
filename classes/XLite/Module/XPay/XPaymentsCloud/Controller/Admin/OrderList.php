<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\Controller\Admin;

use \XLite\Module\XPay\XPaymentsCloud\Main as XPaymentsHelper;

/**
 * Order list controller
 */
class OrderList extends \XLite\Controller\Admin\OrderList implements \XLite\Base\IDecorator
{
    /**
     * Check if payment transaction is suitable for bulk operation
     *
     * @param \XLite\Model\Payment\Transaction $transaction
     *
     * @return bool
     */
    protected function checkTransactionForBulkOperation(\XLite\Model\Payment\Transaction $transaction)
    {
        if (empty($transaction->getXpaymentsId())) {
            return false;
        }

        switch (\XLite\Core\Request::getInstance()->operation) {
            case \XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation::OPERATION_CAPTURE:
            case \XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation::OPERATION_VOID:
                $result = $transaction->isAuthorized();
                break;
            case \XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation::OPERATION_REFUND:
                $result = $transaction->isCaptured();
                break;
            default:
                $result = false;
                break;
        }

        return $result;
    }

    /**
     * Prepare orders and transactions according to request
     *
     * @return array
     */
    protected function prepareTransactions()
    {
        $select = \XLite\Core\Request::getInstance()->select;
        $transactions = array();

        if (!empty($select) && is_array($select)) {

            foreach (array_keys($select) as $orderId) {
                $order = \XLite\Core\Database::getRepo('XLite\Model\Order')->find($orderId);

                foreach ($order->getPaymentTransactions() as $transaction) {
                    if ($this->checkTransactionForBulkOperation($transaction)) {
                        $transactions[$transaction->getXpaymentsId()] = $orderId;
                    }
                }
            }
        }

        return $transactions;
    }

    /**
     * X-Payments bulk operation action
     *
     * @return void
     */
    protected function doActionAddBulkOperation()
    {
        $transactions = $this->prepareTransactions();

        if (!empty($transactions)) {

            $response = XPaymentsHelper::getClient()
                ->doAddBulkOperation('capture', array_keys($transactions));

            $batchId = $response->batch_id;

            $response = XPaymentsHelper::getClient()->doStartBulkOperation($batchId);

            \XLite\Core\Database::getRepo('\XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation')->clearAll();

            foreach ($transactions as $xpid => $orderId) {
                $operation = new \XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation;
                $operation->setOrderId($orderId)
                    ->setXpaymentsId($xpid)
                    ->setBatchId($batchId)
                    ->setOperation($operation::OPERATION_CAPTURE)
                    ->setStatus($operation::STATUS_IN_PROGRESS);

                \XLite\Core\Database::getEM()->persist($operation);
            }

            \XLite\Core\Database::getEM()->flush();
        }

        $url = $this->buildURL('order_list', '', array());

        $this->setReturnURL($url);
    }

    /**
     * Remove X-Payments saved card
     *
     * @return void
     */
    protected function doActionStopBulkOperation()
    {
        try {

            $batchId = \XLite\Core\Database::getRepo('XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation')
                ->getActiveBatchId(\XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation::OPERATION_CAPTURE);

            \XLite\Core\Database::getRepo('\XLite\Module\XPay\XPaymentsCloud\Model\BulkOperation')->clearAll();

            $response = XPaymentsHelper::getClient()
                ->doDeleteBulkOperation($this->batchId);

        } catch (\Exception $exception) {

            XPaymentsHelper::log($exception->getMessage());
        }

        \XLite\Core\TopMessage::addInfo('Bulk operation is canceled');

        $url = $this->buildURL('order_list', '', array());

        $this->setReturnURL($url);
    }
}
