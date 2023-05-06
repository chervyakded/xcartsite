<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\View\FormField\Select;

/**
 * Automatic tax calculate type selector
 */
class AutomaticTaxCalculateType extends \XLite\View\FormField\Select\Regular
{
    const PARAM_ALL_STATES      = 'all';
    const PARAM_SPECIFIC_STATES = 'specific';

    /**
     * Get default options list
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        $options = array();

        $options[static::PARAM_ALL_STATES]      = static::t('All US States');
        $options[static::PARAM_SPECIFIC_STATES] = static::t('Specific states');

        return $options;
    }
}
