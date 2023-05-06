<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\View;

use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Base\AAction;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Interfaces\IAction;
use XLite\Module\CDev\GoogleAnalytics\Logic\ActionsStorage;

/**
 * Actions declaration (Universal)
 *
 * @ListChild (list="layout.footer", zone="customer")
 * @ListChild (list="body", zone="admin")
 */
class GAActions extends \XLite\View\AView
{
    /**
     * Get GA options list
     *
     * @return array
     */
    public function getActions(): array
    {
        $actions = ActionsStorage::getInstance()->getApplicableActions();
        ActionsStorage::getInstance()->clearActions($actions);

        return array_map(
            static function (IAction $action) {
                return $action->getActionData(AAction::FORMAT_JSON);
            },
            $actions
        );
    }

    /**
     * Return widget default template
     *
     * @return string
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    protected function getDefaultTemplate()
    {
        return 'modules/CDev/GoogleAnalytics/ga_actions.twig';
    }
}
