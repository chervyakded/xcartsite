<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\Customer;

use XLite\Core\Auth;
use XLite\Core\Database;
use XLite\Core\Request;
use XLite\Module\QSL\Banner\Model\Repo\Banner;

/**
 * Banner box widget
 *
 */
abstract class ABannerSectionAbstract extends \XLite\View\AView
{
    protected $location = '';

    protected $cnd = null;

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'main';
        $result[] = 'category';
        $result[] = 'product';
        $result[] = 'page';


        return $result;
    }

    /**
     * @return \XLite\Core\CommonCell|null
     */
    protected function getBannerBoxesParameters() {

        if (is_null($this->cnd)) {
            $this->cnd = new \XLite\Core\CommonCell;
            $this->cnd->location=$this->location;
            $this->cnd->enabled = true;

            if (Auth::getInstance()->getProfile()) {
                $this->cnd->membership_id = Auth::getInstance()->getProfile()->getMembershipId();
            } else {
                $this->cnd->no_membership = true;

                $this->cnd->membership_id = NULL;
            }

            if ($this->getTarget() == 'main') {
                $this->cnd->homePage = true;

            } else if ($this->getPage()) {

                $this->cnd->pageId=$this->getPage()->getId();

            } else if ($this->getCategory()) {
                $this->cnd->categoryId=$this->getCategory();

            } else if ($this->getProduct()) {
                $this->cnd->categoryId=array_shift($this->getProduct()->getCategories());

            }

            //show on products pages of the selected category
            if('product' == Request::getInstance()->target) {
                $this->cnd->{Banner::P_PRODUCTS_PAGES} = true;
            }
        }

        return $this->cnd;
    }

     /**
     * Get banner boxes
     *
     * @return string
     */
    protected function getBannerBoxes()
    {
        return Database::getRepo('XLite\Module\QSL\Banner\Model\Banner')->search($this->getBannerBoxesParameters(), Banner::SEARCH_MODE_ENTITIES);
    }


    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/QSL/Banner/banner_section.twig';
    }

    /**
     * @param $banner
     * @return bool|string
     */
    protected function getBannerHeight($banner)
    {

        $height = $banner->getHeight();

        if ($height > 0){
          return 'height: ' . (intval($height) + 2) . 'px;';
        } else {
          return false;
        }
    }

    /**
     * @param $banner
     * @return bool|string
     */
    protected function getBannerLineHeight($banner)
    {
        $height = $banner->getHeight();

        if ($height > 0){
          return 'line-height: ' . $height . 'px;';
        } else {
          return false;
        }
    }


    /**
     * @param $banner
     * @return bool|string
     */
    protected function getBannerWidth($banner)
    {
        $width = $banner->getWidth();

        if ($width > 0){
          return 'width: ' . $width . 'px;';
        } else {
          return false;
        }

    }

    /**
     * @param $banner
     * @return mixed
     */
    protected function isParallaxBanner($banner)
    {
        return $banner->getParallax();
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() && !$this->isForceChangePassword();

    }

    /**
     * Cache availability
     *
     * @return boolean
     */
    protected function isCacheAvailable()
    {
        return true;
    }

    /**
     * Get cache TTL (seconds)
     *
     * @return integer
     */
    protected function getCacheTTL()
    {
        return 3600;
    }

    /**
     * Get cache parameters
     *
     * @return array
     */
    protected function getCacheParameters()
    {
        $list = parent::getCacheParameters();

        $list[] = serialize($this->getBannerBoxesParameters());

        return $list;
    }

}
