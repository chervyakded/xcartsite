<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\Customer;

use Doctrine\Common\Collections\ArrayCollection;
use XLite\Module\QSL\Banner\Model\WidgetParam\Banner;

/**
 * Banner box widget
 *
 */
class BannerParallax extends \XLite\View\AView
{
    /**
     * Widget parameter names
     */
    const PARAM_BANNER_ID      = 'banner_id';

    /**
     * Return templates directory name
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/QSL/Banner';
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return $this->getDir() . LC_DS . 'body-parallax.twig';
    }

    /**
     * @return array
     */
    public function getCSSFiles()
    {
        $result = parent::getCSSFiles();

        $result[] = [
            "file"  => $this->getDir() . LC_DS . "banner-system-parallax.less",
            "merge" => "bootstrap/css/bootstrap.less"
        ];

        return $result;
    }

    /**
     * @return array
     */
    public function getJSFiles()
    {
       $list = parent::getJSFiles();
       $list[] = $this->getDir() . LC_DS . 'parallax.js';

       return $list;
    }

    /**
     * Get Banner
     *
     * @return \XLite\Module\QSL\Banner\Model\Banner
     */
    protected function getBanner()
    {
        return $this->widgetParams[self::PARAM_BANNER_ID]->getObject();
    }

    /**
     * @return array|\Doctrine\Common\Collections\ArrayCollection
     */
    protected function getBannerData()
    {
        $bannersCollection = new ArrayCollection();
        $bannerSlides = $this->getBanner()->getBannerSlide()->toArray();

        usort($bannerSlides, function ($a, $b) { return $a->getPosition() - $b->getPosition(); });

        foreach ($bannerSlides as $key) {
            if ($key->enabled || ($key->getEventCell() == 'C')) {
                $bannersCollection[] = $key;
            }
        }

        return $bannersCollection;

    }

    /**
     * @return array|mixed
     */
    protected function getParallaxBanner()
    {
        $parallaxSlides = $this->getBannerData();

        $parallaxSlide = array();

        foreach ($parallaxSlides as $slide) {
            if ($slide->getEnabled() && (empty($parallaxSlide) || $slide->getParallaxImage()) ) {
                $parallaxSlide = $slide;
            }
        }

        return $parallaxSlide;
    }

    /**
     * Define widget parameters
     *
     * @return void
     */
    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();

        $this->widgetParams += array(
            self::PARAM_BANNER_ID => new Banner('Banner Id', 0, true)
        );
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

        $list[] = $this->widgetParams[self::PARAM_BANNER_ID];

        return $list;
    }
}
