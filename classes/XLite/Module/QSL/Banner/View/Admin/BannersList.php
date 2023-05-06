<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\Admin;

/**
 * Banners list (widget)
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class BannersList extends \XLite\View\Dialog
{
    
    /**
     * Banners list cache
     *
     * @var   \Doctrine\ORM\PersistentCollection|null
     */
    protected $bannersListCache = null;

    /**
     * Return list of allowed targets
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();
        $list[] = 'banners_list';

        return $list;
        
    }

    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = $this->getDir() . LC_DS . 'css/banners_promo.css';

        return $list;
    }

     /**
     * Get banners list
     *
     * @return \Doctrine\ORM\PersistentCollection|void
     */
    public function getBannersList()
    {
        if (is_null($this->bannersListCache)) {

            $this->bannersListCache = \XLite\Core\Database::getRepo('XLite\Module\QSL\Banner\Model\Banner')
                ->getAllBanners();
        }

        return $this->bannersListCache;
    }

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
        return $this->getDir() . LC_DS . 'banners_list.twig';
    }


}
