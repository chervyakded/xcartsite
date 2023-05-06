<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Module\XC\MultiVendor\View\FormField\Select;

/**
 * Automatic tax calculate type selector
 *
 * @Decorator\Rely("XC\MultiVendor")
 */
class AutomaticTaxCalculateType extends \XLite\Module\XC\AvaTax\View\FormField\Select\AutomaticTaxCalculateType implements \XLite\Base\IDecorator
{
    /**
     * @return bool
     */
    protected function isVendorsOwnTaxes()
    {
        return !\XLite\Module\XC\MultiVendor\Main::isWarehouseMode()
            && \XLite\Core\Config::getInstance()->XC->MultiVendor->taxes_owner === \XLite\Module\XC\MultiVendor\Model\Commission::TAXES_OWNER_VENDOR;
    }

    /**
     * @inheritdoc
     */
    public function __construct(array $params = [])
    {
        if ($this->isVendorsOwnTaxes() && 'module' === \XLite::getController()->getTarget()) {
            $params[static::PARAM_HELP] = static::t('In the “Vendors as separate shops” mode, the store administrator can enable vendors to collect taxes and define the states to send the calc request for (on a per vendor basis) via the “Financial details” tab of the corresponding vendor profiles');
        }

        parent::__construct($params);
    }
}
