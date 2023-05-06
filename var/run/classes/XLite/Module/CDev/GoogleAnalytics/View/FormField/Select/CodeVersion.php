<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\View\FormField\Select;

use XLite\Module\CDev\GoogleAnalytics\Core\GA;
use XLite\View\FormField\Select\Regular;

/**
 * Code version selector
 */
class CodeVersion extends Regular
{
    /**
     * Get default options
     *
     * @return array
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    protected function getDefaultOptions()
    {
        return [
            GA::CODE_VERSION_4 => static::t('GA4'),
            GA::CODE_VERSION_U => static::t('Universal Analytics'),
        ];
    }
}
