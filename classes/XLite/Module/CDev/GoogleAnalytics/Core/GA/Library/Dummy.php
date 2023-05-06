<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\Library;

use XLite\Module\CDev\GoogleAnalytics\Core\GA\ALibrary;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\JsList\Dummy as DummyJsList;

class Dummy extends ALibrary
{
    protected static function tagWidgetClass(): string
    {
        return '';
    }

    protected static function JsListClass(): string
    {
        return DummyJsList::class;
    }

    public function getScriptUrl(): string
    {
        return '';
    }

    public function getTagContent(): string
    {
        return '';
    }
}
