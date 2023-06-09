<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\USPS\View\FormField\Select;

/**
 * Mail type selector for settings page
 */
class MailType extends \XLite\View\FormField\Select\Regular
{
    /**
     * Get default options for selector
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        return [
            'All'           => 'All',
            'Package'       => 'Package',
            'Postcards'     => 'Postcards',
            'Envelope'      => 'Envelope',
            'LargeEnvelope' => 'Large envelope',
            'Letter'        => 'Letter',
            'FlatRate'      => 'Flat rate',
            'Airmail Mbag'  => 'Airmail mbag',
        ];
    }
}
