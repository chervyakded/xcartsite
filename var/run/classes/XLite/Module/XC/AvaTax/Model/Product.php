<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Model;

/**
 * Product
 */
 class Product extends \XLite\Module\XC\BulkEditing\Model\Product implements \XLite\Base\IDecorator
{
    /**
     * Product SKU
     *
     * @var string
     *
     * @Column (type="string", length=25, nullable=true)
     */
    protected $avaTaxCode;

    /**
     * Set avaTaxCode
     *
     * @param string $avaTaxCode
     * @return Product
     */
    public function setAvaTaxCode($avaTaxCode)
    {
        $this->avaTaxCode = $avaTaxCode;
        return $this;
    }

    /**
     * Get avaTaxCode
     *
     * @return string 
     */
    public function getAvaTaxCode()
    {
        return $this->avaTaxCode;
    }
}
