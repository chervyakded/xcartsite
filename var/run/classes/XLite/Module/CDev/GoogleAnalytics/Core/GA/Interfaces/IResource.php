<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces;

interface IResource
{
    public function isConfigured(): bool;

    public function isECommerceEnabled(): bool;

    public function isPurchaseImmediatelyOnSuccess(): bool;

    public function getTrackingType(): int;

    public function isDebugMode(): bool;

    public function getCurrencyCode(): string;

    public function getMeasurementId(): string;

    public function getTagWidgetParams(): array;

    public function getLibraryClass(): string;

    /**
     * @return string|IBackendActionExecutor
     */
    public function getBackendExecutorClass(): string;

    public function getDataMapperRegistry(): IDataMapperRegistry;
}
