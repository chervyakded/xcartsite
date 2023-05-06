<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\Controller\Admin;

use Includes\Utils\Module\Module as ModuleUtils;
use XLite\Core\Config;
use XLite\Core\Request;
use XLite\Core\TopMessage;
use XLite\Module\XPay\XPaymentsCloud\Core\ClearCCData;
use XLite\Module\XPay\XPaymentsCloud\Logic\ClearCCData\Generator;
use XLite\Module\XPay\XPaymentsCloud\View\FormField\Select\CardNumberDisplayFormat as Format;

/**
 * Additional actions for Module settings page
 */
 class Module extends \XLite\Controller\Admin\ModuleAbstract implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    protected function doActionUpdate()
    {
        if (strval($this->getModuleId()) === ModuleUtils::buildId('XPay', 'XPaymentsCloud')) {

            $config = Config::getInstance()->XPay->XPaymentsCloud;
            $requestData = Request::getInstance()->getData();

            if (
                Format::FORMAT_UNMASKED === $config->card_number_display_format
                && Format::FORMAT_MASKED === $requestData['card_number_display_format']
            ) {
                TopMessage::getInstance()->clearTopMessages();
                Generator::run($this->assembleClearCCDataOptions());
            }
        }

        parent::doActionUpdate();
    }

    /**
     * @inheritdoc
     */
    protected function doNoAction()
    {
        parent::doNoAction();

        if (strval($this->getModuleId()) === ModuleUtils::buildId('XPay', 'XPaymentsCloud')) {

            $request = Request::getInstance();

            if ($request->clear_cc_data_completed) {
                TopMessage::addInfo('Credit card data has been cleared successfully.');

                $this->setReturnURL(
                    $this->buildURL('module', '', ['moduleId' => 'XPay-XPaymentsCloud'])
                );

            } elseif ($request->clear_cc_data_failed) {
                TopMessage::addError('The clearing of credit card data has been stopped.');

                $this->setReturnURL(
                    $this->buildURL('module', '', ['moduleId' => 'XPay-XPaymentsCloud'])
                );
            }
        }
    }

    /**
     * Check - clearing process is not-finished or not
     *
     * @return boolean
     */
    public function isClearCCDataNotFinished()
    {
        return ClearCCData::getInstance()->isClearCCDataNotFinished();
    }

    /**
     * Assemble clear credit cards data options
     *
     * @return array
     */
    protected function assembleClearCCDataOptions()
    {
        $request = Request::getInstance();

        return [
            'include' => $request->section,
        ];
    }

}
