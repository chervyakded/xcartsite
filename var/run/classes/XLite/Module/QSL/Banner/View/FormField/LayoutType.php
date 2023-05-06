<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\FormField;

/**
 *    Banner System selector
 */
class LayoutType extends \XLite\View\FormField\Label
{

    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = 'modules/QSL/Banner/form_field/layout_type.css';

        return $list;
    }


    /**
     * getDefaultOptions
     *
     * @return array
     */
    protected function getBannerLocation()
    {
        return $this->entity->location;
    }

    /**
     * Return field template
     *
     * @return string
     */
    protected function getFieldTemplate()
    {
        return '../modules/QSL/Banner/form_field/banner_location.twig';
    }


    /**
     * Returns layout type image
     *
     * @param string $value Layout type
     *
     * @return string
     */
    protected function getImage($value)
    {
        return $this->getSVGImage('modules/QSL/Banner/images/layout/' . $value . '.svg');
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible();
    }
}