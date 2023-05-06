<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FacebookMarketing\View\Form;

class FacebookHeader extends \XLite\View\Form\Settings
{
    /**
     * @return string
     */
    protected function getDefaultTarget()
    {
        return 'facebook_marketing';
    }

    /**
     * @return string
     */
    protected function getDefaultAction()
    {
        return 'set_pixel_key';
    }
}
