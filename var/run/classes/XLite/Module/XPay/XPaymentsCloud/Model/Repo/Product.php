<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\Model\Repo;

use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;
use XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Plan;
use XLite\Module\XPay\XPaymentsCloud\View\FormField\Select\Product\IsSubscription;

/**
 * This class adds extra methods for product repository
 */
 class Product extends \XLite\Model\Repo\ProductAbstract implements \XLite\Base\IDecorator
{
    /**
     * @param QueryBuilder $queryBuilder Query builder to prepare
     * @param mixed        $value Condition data
     *
     * @return void
     */
    protected function prepareCndIsSubscription(QueryBuilder $queryBuilder, $value)
    {
        if (IsSubscription::YES === $value) {
            $queryBuilder->innerJoin(
                Plan::class,
                'sp',
                Join::WITH,
                'p.product_id = sp.product'
            )
            ->andWhere('sp.isSubscription = :isSubscription')
            ->setParameter('isSubscription', 1);
        } elseif (IsSubscription::NO === $value) {
            $queryBuilder->leftJoin(
                Plan::class,
                'sp',
                Join::WITH,
                'p.product_id = sp.product'
            )
            ->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->isNull('sp.product'),
                    $queryBuilder->expr()->eq('sp.isSubscription', 0)
                )
            );
        }
    }

}
