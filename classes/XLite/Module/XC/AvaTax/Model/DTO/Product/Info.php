<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Model\DTO\Product;


class Info extends \XLite\Model\DTO\Product\Info implements \XLite\Base\IDecorator
{
    protected function init($object)
    {
        parent::init($object);

        $this->prices_and_inventory->ava_tax_code = $object->getAvaTaxCode();
    }

    public function populateTo($object, $rawData = null)
    {
        parent::populateTo($object, $rawData);

        $object->setAvaTaxCode($this->prices_and_inventory->ava_tax_code);
    }
}