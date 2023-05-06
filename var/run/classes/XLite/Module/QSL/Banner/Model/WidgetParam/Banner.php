<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model\WidgetParam;

/**
 * ____description____
 *
 */
class Banner extends \XLite\Model\WidgetParam\TypeObjectId
{
    /**
     * Return object class name
     *
     * @return string
     */
    protected function getClassName()
    {
        return '\XLite\Module\QSL\Banner\Model\Banner';
    }
}
