<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\View\Model;

/**
 * Settings
 */
 class Settings extends \XLite\Module\XC\NotFinishedOrders\View\Model\Settings implements \XLite\Base\IDecorator
{
    /**
     * Get form field by option
     *
     * @param \XLite\Model\Config $option Option
     *
     * @return array
     */
    protected function getFormFieldByOption(\XLite\Model\Config $option)
    {
        $cell = parent::getFormFieldByOption($option);

        switch ($option->getName()) {
            case 'commit':
                $cell[static::SCHEMA_DEPENDENCY] = [
                    static::DEPENDENCY_HIDE => [
                        'record_transactions' => [false],
                    ],
                ];
                break;
        }

        return $cell;
    }

    /**
     * Populate model object properties by the passed data
     *
     * @param array $data Data to set
     *
     * @return void
     */
    protected function setModelProperties(array $data)
    {
        if (
            \XLite\Core\Request::getInstance()->page == 'Company'
            && isset($data['location_country'])
            && \XLite\Module\XC\AvaTax\Core\TaxCore::getInstance()->isValid()
        ) {
            $address = [
                'location_address' => $data['location_address'],
                'location_city'    => $data['location_city'],
                'location_state'   => $data['location_state'],
                'location_country' => $data['location_country'],
                'location_zipcode' => $data['location_zipcode'],
            ];

            if (\XLite\Module\XC\AvaTax\Core\TaxCore::getInstance()->isAllowedAddressVerification($address)) {
                list($address, $messages) = \XLite\Module\XC\AvaTax\Core\TaxCore::getInstance()->validateAddress($address);

                if ($address) {
                    $data = array_merge($data, $address);
                }

                if ($messages) {
                    foreach ($messages as $message) {
                        $this->addErrorMessage($message['name'], $message['message'], $data);
                    }
                }
            }
        }

        parent::setModelProperties($data);
    }
}
