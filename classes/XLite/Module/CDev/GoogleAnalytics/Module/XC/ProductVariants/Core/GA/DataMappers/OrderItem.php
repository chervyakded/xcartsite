<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Module\XC\ProductVariants\Core\GA\DataMappers;

/**
 * @Decorator\Depend ("XC\ProductVariants")
 */
class OrderItem extends \XLite\Module\CDev\GoogleAnalytics\Core\GA\DataMappers\OrderItem implements \XLite\Base\IDecorator
{
    public function getData(\XLite\Model\OrderItem $item): array
    {
        $result = parent::getData($item);

        /** @var \XLite\Module\XC\ProductVariants\Model\OrderItem $item */
        $variant = $item->getVariant();

        return Product::mapVariantData($variant, $result);
    }

    protected static function getVariant(\XLite\Model\OrderItem $item): string
    {
        $variantName = parent::getVariant($item);

        /** @var \XLite\Module\XC\ProductVariants\Model\OrderItem $item */
        $variant = $item->getVariant();

        return Product::getVariantTitle(
            $variant,
            $variantName
        );
    }
}
