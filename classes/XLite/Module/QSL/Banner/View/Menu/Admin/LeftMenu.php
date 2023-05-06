<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\Menu\Admin;

use XLite\Module\QSL\Banner\Controller\Admin\BannersList;

/**
 * Left menu widget
 *
 */
class LeftMenu extends \XLite\View\Menu\Admin\LeftMenu implements \XLite\Base\IDecorator
{

    /**
     * LeftMenu constructor.
     * @param array $params
     */
    public function __construct(array $params = array())
    {

        if (!isset($this->relatedTargets['banners_list'])) {
            $this->relatedTargets['banners_list'] = array('banner_edit');
        }

        parent::__construct();
    }

    /**
     * Define items
     *
     * @return array
     */
    protected function defineItems()
    {
        $items = parent::defineItems();

        if (!isset($items['content'])) {
            $items['content'] = array(
                self::ITEM_TITLE      => static::t('Content'),
                self::ITEM_WEIGHT     => 600,
                self::ITEM_CHILDREN   => array(),
            );
        }

        $items['content'][self::ITEM_CHILDREN ] += array(
            'banners_list' => array(
                self::ITEM_TITLE      => static::t('Banners'),
                self::ITEM_TARGET     => 'banners_list',
                self::ITEM_PERMISSION => BannersList::PERMISSION_BANNERS,
                self::ITEM_WEIGHT     => 300,
            ),
        );

        return $items;
    }
}
