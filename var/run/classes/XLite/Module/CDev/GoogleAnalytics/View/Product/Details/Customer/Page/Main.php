<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\View\Product\Details\Customer\Page;

use XLite\Module\CDev\GoogleAnalytics\Logic\Action;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Base\AAction;

/**
 * Main
 */
 class Main extends \XLite\View\Product\Details\Customer\Page\MainAbstract implements \XLite\Base\IDecorator
{
    /**
     * Get container attributes
     *
     * @return array
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    protected function getContainerAttributes()
    {
        $list = parent::getContainerAttributes();

        $action = new Action\ProductInfo(
            $this->getProduct()
        );

        if ($actionData = $action->getActionData(
            AAction::RETURN_PART_TYPE
            | AAction::RETURN_PART_DATA
            | AAction::FORMAT_JSON)
        ) {
            $list['data-ga-ec-action'] = $actionData;
        }

        return $list;
    }
}
