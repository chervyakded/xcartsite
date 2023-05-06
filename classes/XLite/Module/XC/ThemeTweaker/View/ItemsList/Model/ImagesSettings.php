<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\View\ItemsList\Model;

/**
 * Images settings items list widget
 */
class ImagesSettings extends \XLite\View\ItemsList\Model\ImagesSettings implements \XLite\Base\IDecorator
{
    /**
     * Define request data
     *
     * @return array
     */
    protected function defineRequestData()
    {
        $params = parent::defineRequestData();
        if (isset($params['new'])) {
            unset($params['new']);
        }

        return $params;
    }
}
