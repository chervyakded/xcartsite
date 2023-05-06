<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\View\FormModel\Product;


 class Info extends \XLite\Module\XC\CustomerAttachments\View\FormModel\Product\Info implements \XLite\Base\IDecorator
{
    protected function defineFields()
    {
        $schema = parent::defineFields();

        $schema['prices_and_inventory']['ava_tax_code'] = [
            'label'       => static::t('Tax code (AvaTax)'),
            'constraints' => [
                'XLite\Core\Validator\Constraints\MaxLength' => [
                    'length'  => 25,
                ],
            ],
            'position'    => 250,
        ];

        return $schema;
    }
}