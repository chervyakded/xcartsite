<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\BackendActionExecutor;

use XLite\Base;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\IBackendActionExecutor;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Interfaces\IBackendAction;

class Dummy extends Base implements IBackendActionExecutor
{
    public function execute(IBackendAction $action): bool
    {
        return false;
    }
}
