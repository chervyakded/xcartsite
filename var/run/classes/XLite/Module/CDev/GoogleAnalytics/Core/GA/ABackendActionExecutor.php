<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA;

use Exception;
use XLite\Base;
use XLite\Core\HTTP\Request;
use XLite\Logger;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Interfaces\IBackendAction;

abstract class ABackendActionExecutor extends Base
{
    public function execute(IBackendAction $action): bool
    {
        if (!$action->isApplicable()) {
            return false;
        }

        try {
            $data = static::buildActionQueryData($action);

            $request       = new Request(static::getRequestURL());
            $request->verb = 'POST';
            $request->body = static::buildRequestBody($data);
            $response      = $request->sendRequest();

            if (GA::getResource()->isDebugMode()) {
                Logger::logCustom('google_analytics_debug', [
                    'request data'  => $data,
                    'response data' => $response,
                ]);
            }

        } catch (Exception $e) {
            /** @noinspection ProperNullCoalescingOperatorUsageInspection */
            Logger::logCustom('google_analytics_failed', $data ?? $action);
        }

        return (bool) ($response ?? null);
    }

    protected static function buildActionQueryData(IBackendAction $action): array
    {
        return array_merge(
            static::getBaseData(),
            static::getActionSpecificData($action)
        );
    }

    public static function getBaseData(): array
    {
        return [];
    }

    abstract public static function getActionSpecificData(IBackendAction $action): array;

    abstract public static function getRequestURL(): string;

    /**
     * @param mixed $data
     *
     * @return string
     */
    abstract public static function buildRequestBody($data): string;

}
