<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\Model;

use Includes\Utils\Module\Module;
use XLite\Core\Request;
use XLite\Module\XPay\XPaymentsCloud\Core\ClearCCData;

/**
 * Settings dialog model widget
 */
 class Settings extends \XLite\View\Model\SettingsAbstract implements \XLite\Base\IDecorator
{
    /**
     * Return file name for the center part template
     *
     * @return string
     */
    protected function getBody()
    {
        $result = parent::getBody();

        if (
            \XLite::getController() instanceof \XLite\Controller\Admin\Module
            && isset(Request::getInstance()->getGetData()['moduleId'])
            && Request::getInstance()->getGetData()['moduleId'] === Module::buildId('XPay', 'XPaymentsCloud')
            && ClearCCData::getInstance()->isClearCCDataNotFinished()
        ) {
            $result = 'modules/XPay/XPaymentsCloud/clear_cc_data/body.twig';
        }

        return $result;
    }

}
