<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\View\ItemsList\Product\Customer;

use XLite\Core\Config;
use XLite\Core\Request;
use XLite\Core\Translation;
use XLite\Model\Product;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;
use XLite\Module\CDev\GoogleAnalytics\View\Product\ListItem;
use XLite\View\Pager\APager;

/**
 * Class ACustomer
 */
abstract class ACustomer extends \XLite\View\ItemsList\Product\Customer\ACustomer implements \XLite\Base\IDecorator
{
    /**
     * @var int
     */
    protected $ga_position_in_list = 1;

    /**
     * Get a list of JavaScript files required to display the widget properly
     *
     * @return array
     * @noinspection ReturnTypeCanBeDeclaredInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        if (GA::getResource()->isECommerceEnabled()) {
            $list[] = 'modules/CDev/GoogleAnalytics/items_list/product/products_list.js';
        }

        return $list;
    }

    /**
     * Get product list item widget params required for the widget of type getProductWidgetClass().
     *
     * @param Product $product
     *
     * @return array
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    protected function getProductWidgetParams(Product $product)
    {
        $result = parent::getProductWidgetParams($product);


        Translation::setTmpTranslationCode(Config::getInstance()->General->default_language);

        $result[ListItem::PARAM_LIST_READABLE_NAME]  = $this->getHead();
        $result[ListItem::PARAM_GA_POSITION_ON_LIST] = $this->getProductPositionInListForGA();

        Translation::setTmpTranslationCode(null);

        return $result;
    }

    /**
     * N.B. changes internal position counter
     *
     * @return integer
     */
    protected function getProductPositionInListForGA()
    {
        $pageId       = (int) Request::getInstance()->{APager::PARAM_PAGE_ID} ?: 1;
        $itemsPerPage = $this->getPager()->getItemsPerPage();

        return ($pageId - 1) * $itemsPerPage + $this->ga_position_in_list++;
    }
}
