<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers;

use XLite\Model\Category;
use XLite\Model\CategoryTranslation;
use XLite\Module\CDev\GoogleAnalytics\Core\GA\Interfaces\DataMappers\IOrderItem;

class OrderItem extends Common implements IOrderItem
{
    public function getDataForBackend(\XLite\Model\OrderItem $item, $qty = null, int $index = 1): array
    {
        $productData = $this->getData($item);
        $result      = [];

        $result["pr" . $index . "id"] = $productData['id'];
        $result["pr" . $index . "nm"] = $productData['name'];
        $result["pr" . $index . "ca"] = $productData['category'];
        $result["pr" . $index . "br"] = $productData['brand'];
        $result["pr" . $index . "va"] = $productData['variant'];
        $result["pr" . $index . "pr"] = $productData['price'];
        $result["pr" . $index . "qt"] = $qty ?: $productData['quantity'];

        return $result;
    }

    public function getData(\XLite\Model\OrderItem $item): array
    {
        $brand        = static::getBrand($item);
        $variant      = static::getVariant($item);
        $product      = $item->getObject();
        /** @var \XLite\Module\CDev\GoogleAnalytics\Model\OrderItem $item */
        $categoryName = $item->getCategoryAdded();

        if (!$categoryName) {
            $category     = static::detectCategory($product);
            $categoryName = static::getCategoryName($category);
        }

        return [
            'id'       => $item->getSku(),
            'name'     => $product ? $product->getName() : $item->getName(),
            'category' => $categoryName,
            'brand'    => $brand,
            'variant'  => $variant,
            'price'    => (string) ($item->getNetPrice()),
            'quantity' => (string) ($item->getAmount()),
        ];
    }

    /**
     * Get product's brand
     *
     * @param \XLite\Model\OrderItem $item
     *
     * @return string
     */
    protected static function getBrand(\XLite\Model\OrderItem $item): string
    {
        return '';
    }

    /**
     * Get product's variant
     *
     * @param \XLite\Model\OrderItem $item
     *
     * @return string
     */
    protected static function getVariant(\XLite\Model\OrderItem $item): string
    {
        return '';
    }

    protected static function detectCategory(?\XLite\Model\Product $product): ?Category
    {
        return $product ? $product->getCategory() : null;
    }

    public static function getCategoryName(?Category $category): string
    {
        /** @var Category|CategoryTranslation|null $category */
        return $category ? $category->getName() : '';
    }
}
