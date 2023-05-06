<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\ItemsList\Model\Product\Admin;

use XLite\Model\SearchCondition\RepositoryHandler;
use XLite\Module\XPay\XPaymentsCloud\View\FormField\Select\Product\IsSubscription;
use XLite\View\FormField\AFormField;
use XLite\View\SearchPanel\ASearchPanel;
use XLite\View\SearchPanel\SimpleSearchPanel;

/**
 * This class adds extra search field for filtering products that have subscription plans
 */
 class Search extends \XLite\View\ItemsList\Model\Product\Admin\SearchAbstract implements \XLite\Base\IDecorator
{
    const IS_SUBSCRIPTION = 'is_subscription';

    /**
     * @inheridoc
     */
    public static function getSearchParams()
    {
        return array_merge(
            parent::getSearchParams(),
            [
                self::IS_SUBSCRIPTION => [
                    'condition' => new RepositoryHandler(self::IS_SUBSCRIPTION),
                    'widget'    => [
                        SimpleSearchPanel::CONDITION_TYPE => SimpleSearchPanel::CONDITION_TYPE_HIDDEN,
                        ASearchPanel::CONDITION_CLASS     => IsSubscription::class,
                        AFormField::PARAM_LABEL           => static::t('Display subscription products'),
                    ],
                ],
            ]
        );
    }

}
