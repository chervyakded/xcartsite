<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\View\Model\Profile;

/**
 * \XLite\View\Model\Profile\AdminMain
 */
 class AdminMain extends \XLite\View\Model\Profile\AdminMainAbstract implements \XLite\Base\IDecorator
{

    const SECTION_AVATAX = 'avatax';

    /**
     * AvaTax schema 
     * 
     * @var   array
     */
    protected $avataxSchema = array(
        'avaTaxExemptionNumber' => array(
            self::SCHEMA_CLASS    => '\XLite\View\FormField\Input\Text',
            self::SCHEMA_LABEL    => 'Exemption number',
            self::SCHEMA_MODEL_ATTRIBUTES => array(
                \XLite\View\FormField\Input\Base\StringInput::PARAM_MAX_LENGTH => 'length',
            ),
        ),
        'avaTaxCustomerUsageType' => array(
            self::SCHEMA_CLASS    => '\XLite\Module\XC\AvaTax\View\FormField\Select\CustomerUsageTypes',
            self::SCHEMA_LABEL    => 'Usage type',
        ),
    );

    /**
     * Return list of the class-specific sections
     *
     * @return array
     */
    protected function getProfileMainSections()
    {
        return parent::getProfileMainSections()
            + array(
                static::SECTION_AVATAX => 'AvaTax settings',
            );
    }

    /**
     * Return fields list by the corresponding schema
     *
     * @return array
     */
    protected function getFormFieldsForSectionAvatax()
    {
        return $this->getFieldsBySchema($this->avataxSchema);
    }

}
