<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\Controller\Admin;

use XLite\Core\Request;
use XLite\Module\XPay\XPaymentsCloud\Main as XPaymentsHelper;

/**
 * Order page controller
 */
 class Order extends \XLite\Module\XPay\XPaymentsCloud\Module\QSL\XPaymentsSubscriptions\Controller\Admin\Order implements \XLite\Base\IDecorator
{
    /**
     * Subscription plan page key
     */
    const PAGE_XPAYMENTS_SUBSCRIPTIONS = 'xpayments_subscriptions';

    /**
     * Add tab for subscriptions
     *
     * @return array
     */
    public function getPages()
    {
        $list = parent::getPages();

        if (
            XPaymentsHelper::isSubscriptionManagementEnabled()
            && null !== $this->getOrder()
            && $this->getOrder()->hasXpaymentsSubscriptions()
        ) {
            $list[static::PAGE_XPAYMENTS_SUBSCRIPTIONS] = static::t('X-Payments subscriptions');
        }

        return $list;
    }

    /**
     * Add tab template for subscriptions
     *
     * @return array
     */
    protected function getPageTemplates()
    {
        $list = parent::getPageTemplates();

        if ($this->getOrder()->hasXpaymentsSubscriptions()) {
            $list[static::PAGE_XPAYMENTS_SUBSCRIPTIONS] = 'modules/XPay/XPaymentsCloud/order/page/subscriptions.twig';
        }

        return $list;
    }

    /** Do Rebill action
     *
     * @return void
     */
    public function doActionRebill()
    {
        if (
            Request::getInstance()->xpid
            && Request::getInstance()->amount
            && $this->getOrder()
        ) {
            $xpid = Request::getInstance()->xpid;
            $amount = number_format(Request::getInstance()->amount, 2, '.', '');

            /** @var \XLite\Module\XPay\XPaymentsCloud\Model\Payment\Processor\XPaymentsCloud $processor */
            $processor = XPaymentsHelper::getPaymentMethod()->getProcessor();

            $processor->doRebill(
                $this->getOrder(),
                $amount,
                $xpid
            );
        }

        $this->redirectBackToOrder();
    }

    /**
     * Order number wrapper
     *
     * @return integer
     */
    public function getOrderNumber()
    {
        return $this->getOrder()->getOrderNumber();
    }

    /**
     * Redirect admin back to the order page (controller's redirecter wrapper)
     *
     * @return void
     */
    public function redirectBackToOrder()
    {
        $this->setHardRedirect();

        $this->setReturnURL(
            $this->buildURL(
                'order',
                '',
                [
                    'order_number' => $this->getOrderNumber(),
                ]
            )
        );

        $this->doRedirect();

        exit;
    }

}
