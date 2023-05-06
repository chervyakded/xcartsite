<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Core;

use XLite\Core\Request;

/**
 * Layout manager
 */
 class Layout extends \XLite\Module\QSL\CloudSearch\Core\Layout implements \XLite\Base\IDecorator
{
    /**
     * Prepare JS resources
     *
     * @param array $resources Resources
     *
     * @return array
     */
    protected function prepareJSResources(array $resources)
    {
        $ignoreCycle2Lib = Request::getInstance()->ignoreCycle2Lib;
        $deleteFile = false;

        foreach ($resources as $key => $value) {
            if (isset($resources[$key]['file'])) {
                if (preg_match('/jquery.cycle2.min.js$/', $resources[$key]['file'])) {

                    if ($deleteFile || $ignoreCycle2Lib) {
                        unset($resources[$key]);
                    }

                    $deleteFile = true;
                }
            }
        }

        return $resources;
    }

}
