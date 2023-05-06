<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\Product;

use XLite\Model\Product;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\AMapper;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers\ICommon;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers\IProduct;

class UAGA extends AMapper implements IProduct
{
    public function getData(Product $product, string $listName = '', string $positionInList = ''): array
    {
        return $this->getInstance()->getData($product, $listName, $positionInList);
    }

    public function getAddProductData(Product $product, string $listName = '', string $positionInList = '', string $coupon = '', $qty = null): array
    {
        return $this->getInstance()->getAddProductData($product, $listName, $positionInList, $coupon, $qty);
    }

    /**
     * @return ICommon|IProduct
     */
    protected function getInstance(): ICommon
    {
        return $this->instance;
    }
}
