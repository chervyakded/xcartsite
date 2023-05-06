<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model;

/**
 * Category model
 *
 */
class Category extends \XLite\Model\Category implements \XLite\Base\IDecorator
{
    /**
     * Banners (relation)
     *
     * @var   \Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany (targetEntity="XLite\Module\QSL\Banner\Model\Banner", mappedBy="categories",  cascade={"merge","detach"})
     */
    protected $banners;


    /**
     * Constructor
     *
     * @param array $data Entity properties OPTIONAL
     *
     * @return void
     */
    public function __construct(array $data = array())
    {
        $this->banners = new \Doctrine\Common\Collections\ArrayCollection();

        parent::__construct($data);
    }

    /**
     * Add memberships
     *
     * @param \XLite\Module\QSL\Banner\Model\Banner $banners
     * @return Category
     */
    public function addBanners(\XLite\Module\QSL\Banner\Model\Banner $banners)
    {
        $this->banners[] = $banners;
        return $this;
    }

    /**
     * Get memberships
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBanners()
    {
        return $this->banners;
    }

}