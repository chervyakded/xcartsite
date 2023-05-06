<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\Resource;

use XLite\Module\CDev\GoogleAnalytics\Core\GA\AResource;

class GA4 extends AResource
{
    public function isConfigured(): bool
    {
        return parent::isConfigured() && ($this->isPurchaseImmediatelyOnSuccess() || $this->getApiSecret());
    }

    public function getApiSecret(): string
    {
        return $this->config->ga_api_secret;
    }

    public function getMeasurementId(): string
    {
        return $this->config->ga_measurement_id;
    }

    public function getBackendExecutorClass(): string
    {
        return \XLite\Module\CDev\GoogleAnalytics\Core\GA\BackendActionExecutor\GA4::class;
    }

}
