<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

/** @noinspection PhpMissingParamTypeInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace XLite\Module\CDev\GoogleAnalytics\Model;

use XLite\Module\CDev\GoogleAnalytics\Logic\Action;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Base\AAction;

/**
 * Something customer can put into his cart (sic!)
 */
class OrderItem extends \XLite\Model\OrderItem implements \XLite\Base\IDecorator
{
    /**
     * Category added name
     *
     * @var string
     *
     * @Column (type="string", nullable=true)
     */
    protected $categoryAdded = '';

    /**
     * @return string
     */
    public function getCategoryAdded()
    {
        return $this->categoryAdded;
    }

    /**
     * @param string $categoryAdded
     */
    public function setCategoryAdded($categoryAdded)
    {
        $this->categoryAdded = $categoryAdded;
    }

    /**
     * Get event cell base information
     *
     * @return array
     */
    public function getEventCell()
    {
        $result = parent::getEventCell();

        $action = new Action\DataDriven\OrderItemEventCell($this);

        if ($actionData = $action->getActionData(AAction::RETURN_PART_DATA)) {
            $result['ga-data'] = $actionData;
        }

        return $result;
    }
}
