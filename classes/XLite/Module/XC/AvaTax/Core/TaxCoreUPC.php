<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Core;

/**
 * AcaTax client
 *
 * @Decorator\Depend ("XC\SystemFields")
 */
class TaxCoreUPC extends \XLite\Module\XC\AvaTax\Core\TaxCore implements \XLite\Base\IDecorator
{
    /**
     * Assemble item code
     *
     * @param \XLite\Model\OrderItem $item Order item
     *
     * @return string
     */
    protected function assembleItemCode(\XLite\Model\OrderItem $item)
    {
        $upc = $item->getProduct()->getUpcIsbn();

        return $upc ? substr('UPC:' . $upc, 0, 50) : parent::assembleItemCode($item);
    }
}
