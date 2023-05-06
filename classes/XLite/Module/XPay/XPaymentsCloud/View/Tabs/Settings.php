<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\Tabs;

use XLite\Core\Request as Request;
use XLite\Module\XPay\XPaymentsCloud\Main as XPaymentsHelper;

/**
 * Tabs related to X-Payments Cloud settings page
 *
 * @ListChild (list="admin.center", zone="admin", weight="10")
 */
class Settings extends \XLite\View\Tabs\ATabs
{
    /**
     * Returns the list of targets where this widget is available
     *
     * @return string[]
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();

        $list[] = 'payment_method';
        $list[] = 'module';

        return $list;
    }

    /**
     * Check widget visibility
     *
     * @return boolean
     */
    protected function isVisible()
    {
        switch ($this->getTarget()) {
            case 'module':
                $forXpayments = ('XPay-XPaymentsCloud' == Request::getInstance()->moduleId);
                break;
            case 'payment_method':
                $forXpayments = ($this->getPaymentMethod()->isXpayments());
                break;
            default:
                $forXpayments = true;
                break;
        }

        return $forXpayments
            && parent::isVisible();
    }

    /**
     * Returns tab URL
     *
     * @param string $target Tab target
     *
     * @return string
     */
    protected function buildTabURL($target)
    {
        $methodId = (Request::getInstance()->method_id) ?: XPaymentsHelper::getPaymentMethod()->getMethodId();

        switch ($target) {
            case 'module':
                $url = $this->buildUrl($target, '', ['moduleId' => 'XPay-XPaymentsCloud', 'method_id' => $methodId]);
                break;
            case 'payment_method':
                $url = $this->buildUrl($target, '', ['method_id' => $methodId]);
                break;
            default:
                $url = parent::buildTabURL($target);
                break;
        }

        return $url;
    }

    /**
     * Define tabs
     *
     * @return array
     */
    protected function defineTabs()
    {
        return array( 
            'payment_method' => array(
                'weight' => 100,
                'title'  => static::t('Payment Method'),
                'template' => 'empty.twig',
            ),
            'module' => array( 
                'weight' => 200,
                'title'  => static::t('Store settings'),
                'template' => 'empty.twig',
            ),
        );
    }

    /**
     * Get payment method
     *
     * @return \XLite\Model\Payment\Method
     */
    public function getPaymentMethod()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')
            ->find(Request::getInstance()->method_id);
    }

}
