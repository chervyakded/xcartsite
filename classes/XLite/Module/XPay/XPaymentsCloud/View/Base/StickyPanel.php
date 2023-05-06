<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\Base;

use Includes\Utils\Module\Module;
use XLite\Core\Request;

/**
 * Sticky panel
 */
abstract class StickyPanel extends \XLite\View\Base\StickyPanel implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        if (
            \XLite::getController() instanceof \XLite\Controller\Admin\Module
            && isset(Request::getInstance()->getGetData()['moduleId'])
            && Request::getInstance()->getGetData()['moduleId'] === Module::buildId('XPay', 'XPaymentsCloud')
        ) {
            $list[] = 'modules/XPay/XPaymentsCloud/js/stickyPanelXpayments.js';
        }

        return $list;
    }

}
