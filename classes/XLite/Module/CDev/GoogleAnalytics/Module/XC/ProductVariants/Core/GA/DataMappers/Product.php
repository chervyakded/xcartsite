<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Module\XC\ProductVariants\Core\GA\DataMappers;

use XLite\Module\XC\ProductVariants\Model\ProductVariant;

/**
 * @Decorator\Depend ("XC\ProductVariants")
 */
class Product extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\Product implements \XLite\Base\IDecorator
{
    public function getAddProductData(\XLite\Model\Product $product, string $listName = '', string $positionInList = '', string $coupon = '', $qty = null): array
    {
        $result = parent::getAddProductData($product, $listName, $positionInList, $coupon, $qty);

        /** @var \XLite\Module\XC\ProductVariants\Model\Product $product */
        $variant = $product->getVariant();

        return static::mapVariantData($variant, $result);
    }

    protected static function getVariant(\XLite\Model\Product $product): string
    {
        $variantName = parent::getVariant($product);

        /** @var \XLite\Module\XC\ProductVariants\Model\Product $product */
        $variant = $product->getVariant();

        return self::getVariantTitle($variant, $variantName);
    }

    public static function getVariantTitle(?ProductVariant $variant, string $variantName): string
    {
        if ($variant) {
            $hash = [];
            foreach ($variant->getValues() as $av) {
                $hash[] = $av->getAttribute()->getName() . ':' . $av->asString();
            }
            sort($hash);
            $variantName = implode('_', $hash);
        }

        return $variantName;
    }

    public static function mapVariantData(?ProductVariant $variant, array $result): array
    {
        if ($variant) {
            $result['id']    = $variant->getSku() ?: $result['id'];
            $result['price'] = is_numeric($variant->getNetPrice())
                ? $variant->getNetPrice()
                : $result['price'];
        }

        return $result;
    }
}
