<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax;

abstract class Main extends \XLite\Module\AModule
{
    /**
     * @return boolean
     */
    public static function hasGdprRelatedActivity()
    {
        return true;
    }
}
