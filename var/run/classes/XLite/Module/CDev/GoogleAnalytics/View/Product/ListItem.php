<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\View\Product;

use XLite\Model\WidgetParam\TypeInt;
use XLite\Model\WidgetParam\TypeString;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Base\AAction;

/**
 * Class ListItem
 */
 class ListItem extends \XLite\Module\CDev\MarketPrice\View\Product\ListItem implements \XLite\Base\IDecorator
{
    public const PARAM_LIST_READABLE_NAME  = 'itemListReadableName';
    public const PARAM_GA_POSITION_ON_LIST = 'gaPositionOnList';

    /**
     * Get impression GA event data
     */
    protected function getImpressionData()
    {
        $listName = $this->getReadableListName() ?: $this->getItemListWidgetTarget();
        $position = $this->getGaPositionInList() ?: '';

        $action = new Action\Impression(
            $this->getProduct(),
            $listName,
            $position
        );

        return $action->getActionData(AAction::FORMAT_JSON);
    }

    /**
     * Readable list name for GoogleAnalytics
     *
     * @return string
     */
    protected function getReadableListName(): ?string
    {
        return $this->getParam(static::PARAM_LIST_READABLE_NAME);
    }

    /**
     * @return mixed
     */
    protected function getGaPositionInList()
    {
        return $this->getParam(static::PARAM_GA_POSITION_ON_LIST);
    }

    /**
     * Define widget parameters
     *
     * @return void
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();

        $this->widgetParams += [
            static::PARAM_LIST_READABLE_NAME  => new TypeString('Item list readable name'),
            static::PARAM_GA_POSITION_ON_LIST => new TypeInt('Item list position on list'),
        ];
    }
}
