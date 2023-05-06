<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\View;

use XLite\Controller\AController;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;

/**
 * Abstract widget
 */
abstract class AView extends \XLite\Module\CDev\Paypal\View\AView implements \XLite\Base\IDecorator
{
    /**
     * Register JS files
     *
     * @return array
     * @noinspection ReturnTypeCanBeDeclaredInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getJSFiles()
    {
        return array_merge(parent::getJSFiles(), GA::getLibrary()->getJsList()->ecommerce);
    }

    /**
     * Get a list of CSS files
     *
     * @return array
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        /** @var AView|AController $this */
        if ('module' === $this->getTarget()) {
            $list[] = 'modules/CDev/GoogleAnalytics/style.css';
        }

        return $list;
    }

    /**
     * Register files from common repository
     *
     * @return array
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    protected function getCommonFiles()
    {
        $list = parent::getCommonFiles();

        $list[static::RESOURCE_JS] = array_merge($list[static::RESOURCE_JS], GA::getLibrary()->getJsList()->common);

        return $list;
    }
}
