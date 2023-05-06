<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\View\FormField\Inline\FileUploader;

/**
 * Image
 */
class Image extends \XLite\View\FormField\Inline\FileUploader\Image
{
    protected function isEditable()
    {
        return true;
    }

    protected function getSavedValue()
    {
        return $this->getEntity();
    }

    protected function getEntityValue()
    {
        return $this->getEntity();
    }
}
