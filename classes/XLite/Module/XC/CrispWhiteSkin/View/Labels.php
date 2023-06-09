<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\CrispWhiteSkin\View;

class Labels extends \XLite\View\Labels implements \XLite\Base\IDecorator
{
    /**
     * @return array
     */
    public function getCSSFiles()
    {
        return [
            $this->getDir() . '/style.less'
        ];
    }
}
