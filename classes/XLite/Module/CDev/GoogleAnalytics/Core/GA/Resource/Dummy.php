<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\Resource;

use XLite\Module\CDev\GoogleAnalytics\Core\GA\AResource;

class Dummy extends AResource
{
    public function getMeasurementId(): string
    {
        return '';
    }

    public function isConfigured(): bool
    {
        return false;
    }

    public function getBackendExecutorClass(): string
    {
        return \XLite\Module\CDev\GoogleAnalytics\Core\GA\BackendActionExecutor\Dummy::class;
    }

}
