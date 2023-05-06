<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\View\Model;

 class ModuleSettings extends \XLite\Module\XC\Reviews\View\Model\ModuleSettings implements \XLite\Base\IDecorator
{
    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'modules/XC/AvaTax/settings/style.less';

        return $list;
    }

    /**
     * Get form field by option
     *
     * @param \XLite\Model\Config $option Option
     *
     * @return array
     */
    protected function getFormFieldByOption(\XLite\Model\Config $option)
    {
        $cell = parent::getFormFieldByOption($option);

        if (
            $this->getModule()
            && 'XC-AvaTax' === $this->getModule()
            && 'display_as_summary' == $option->getName()
        ) {
            $url = \XLite\Core\Layout::getInstance()->getResourceWebPath('modules/XC/AvaTax/settings/taxes_help.png');

            $cell[\XLite\View\FormField\AFormField::PARAM_HELP] = '<img src="' . $url . '">';
        }

        return $cell;
    }
}
