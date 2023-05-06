<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model;

/**
 * Membership
 */
abstract class Membership extends \XLite\Model\MembershipAbstract implements \XLite\Base\IDecorator
{
    /**
     * Coupons
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany (targetEntity="XLite\Module\QSL\Banner\Model\Banner", mappedBy="memberships")
     */
    protected $banners;

    /**
     * Add coupons
     *
     * @param \XLite\Module\QSL\Banner\Model\Banner $banners
     * @return Membership
     */
    public function addBanners(\XLite\Module\QSL\Banner\Model\Banner $banners)
    {
        $this->banners[] = $banners;
        return $this;
    }

    /**
     * Get coupons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBanners()
    {
        return $this->banners;
    }
}
