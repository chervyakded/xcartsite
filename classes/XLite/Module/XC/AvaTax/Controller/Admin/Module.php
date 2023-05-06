<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Controller\Admin;

use Includes\Utils\Module\Manager;
use XLite\Module\XC\Development\View\Pager\Admin\Module\Manage;

/**
 * Module settings
 */
abstract class Module extends \XLite\Controller\Admin\Module implements \XLite\Base\IDecorator
{

    /**
     * Preprocessor for no-action run
     *
     * @return void
     */
    protected function doNoAction()
    {
        parent::doNoAction();

        if ($this->getModule() === \Includes\Utils\Module\Module::buildId('XC', 'AvaTax')
            && \XLite\Core\Config::getInstance()->XC->AvaTax->account_number
            && \XLite\Core\Config::getInstance()->XC->AvaTax->license_key
        ) {

            // Check connection
            $messages = array();
            if (!\XLite\Module\XC\AvaTax\Core\TaxCore::getInstance()->testConnection($messages)) {
                \XLite\Core\TopMessage::addError('Connection to AvaTax server failed');
                foreach ($messages as $message) {
                    \XLite\Core\TopMessage::addError($message);
                }

            } else {

                // Check address
                $company = \XLite\Core\Config::getInstance()->Company;
                $address = array(
                    'location_address' => $company->location_address,
                    'location_city'    => $company->location_city,
                    'location_state'   => $company->location_state,
                    'location_country' => $company->location_country,
                    'location_zipcode' => $company->location_zipcode,
                );
                list($address, $messages) = \XLite\Module\XC\AvaTax\Core\TaxCore::getInstance()->validateAddress($address);
                if ($messages) {
                    \XLite\Core\TopMessage::addError(
                        'Invalid company address. Please follow this link and correct the address.',
                        array(
                            'url' => \XLite\Core\COnverter::buildURL('settings', null, array('page' => 'Company')),
                        )
                    );
                }
            }
        }
    }

}
