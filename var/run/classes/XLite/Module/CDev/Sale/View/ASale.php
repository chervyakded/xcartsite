<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Sale\View;

abstract class ASale extends \XLite\View\ItemsList\Product\Customer\ACustomer
{
    const PARAM_CATEGORY_ID = 'category_id';
    const SORT_BY_MODE_SALE = \XLite\Model\Repo\Product::PERCENT_CALCULATED_FIELD;

    const WIDGET_TARGET_SALE_PRODUCTS = 'sale_products';

    /**
     * @param array $params Widget params OPTIONAL
     *
     * @return void
     */
    public function __construct(array $params = [])
    {
        parent::__construct($params);

        $this->sortByModes = [
                static::SORT_BY_MODE_SALE => 'Recommended',
            ] + $this->sortByModes;
    }

    /**
     * @return array
     */
    protected function getSingleOrderSortByFields()
    {
        return array_merge(parent::getSingleOrderSortByFields(), [
            static::SORT_BY_MODE_SALE => static::SORT_ORDER_DESC,
        ]);
    }

    /**
     * @return string
     */
    protected function getSortByModeDefault()
    {
        return static::SORT_BY_MODE_SALE;
    }

    /**
     * @return array
     */
    protected function getSortByFields()
    {
        return [
                'sale' => static::SORT_BY_MODE_SALE,
            ] + parent::getSortByFields();
    }

    /**
     * @return string
     */
    protected static function getWidgetTarget()
    {
        return static::WIDGET_TARGET_SALE_PRODUCTS;
    }

    /**
     * @return string
     */
    public function getListCSSClasses()
    {
        return parent::getListCSSClasses() . ' sale-products';
    }

    /**
     * @return string
     */
    protected function getHead()
    {
        return static::t('Sale');
    }

    /**
     * @return string
     */
    protected function getPagerClass()
    {
        return 'XLite\Module\CDev\Sale\View\Pager\Pager';
    }

    /**
     * @param  \XLite\Core\CommonCell $searchCase Search case
     *
     * @return \XLite\Core\CommonCell
     */
    protected function postprocessSearchCase(\XLite\Core\CommonCell $searchCase)
    {
        $searchCase = parent::postprocessSearchCase($searchCase);
        $searchCase->{\XLite\Model\Repo\Product::P_PARTICIPATE_SALE} = true;
        $searchCase->{\XLite\Model\Repo\Product::P_HAS_SALE_DISCOUNTS} = $this->getSaleDiscounts();

        return $searchCase;
    }

    /**
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() && $this->hasResults();
    }

    /**
     * @return integer
     */
    protected function getMaxCountInBlock()
    {
        return (int)\XLite\Core\Config::getInstance()->CDev->Sale->sale_max_count_in_block ?: 3;
    }

    /**
     * @return string
     */
    protected function getBlockClasses()
    {
        return parent::getBlockClasses() . ' block-sale-products';
    }

    /**
     * @return array
     */
    protected function getSaleDiscounts()
    {
        $profile         = \XLite\Core\Auth::getInstance()->getProfile() ?? new \XLite\Model\Profile;
        $activeDiscounts = \XLite\Core\Database::getRepo('XLite\Module\CDev\Sale\Model\SaleDiscount')->findAllActive();

        return array_filter($activeDiscounts, function ($discount) use ($profile) {
            /** @var \XLite\Module\CDev\Sale\Model\SaleDiscount $discount */
            return $discount->isActive() && $discount->isApplicableForProfile($profile);
        });
    }
}
