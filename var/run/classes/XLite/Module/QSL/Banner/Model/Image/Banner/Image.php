<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model\Image\Banner;

/**
 * Banner image
 *
 * @Entity (repositoryClass="\XLite\Module\QSL\Banner\Model\Repo\Image\Banner\Image")
 * @Table  (name="banner_slide_images")
 */
class Image extends \XLite\Model\Base\Image
{
    /**
     * Relation to a product entity
     *
     * @var   \XLite\Module\QSL\Banner\Model\BannerSlide
     *
     * @OneToOne  (targetEntity="XLite\Module\QSL\Banner\Model\BannerSlide", inversedBy="image")
     * @JoinColumn (name="banner_slide_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $bannerSlide;


    /**
     * Alternative image text
     *
     * @var string
     *
     * @Column (type="string", length=255)
     */
    protected $alt = '';

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set product
     *
     * @param \XLite\Module\QSL\Banner\Model\BannerSlide $bannerSlide
     * @return Image
     */
    public function setBannerSlide(\XLite\Module\QSL\Banner\Model\BannerSlide $bannerSlide = null)
    {
        $this->bannerSlide = $bannerSlide;
        return $this;
    }

    /**
     * Get product
     *
     * @return \XLite\Module\QSL\Banner\Model\BannerSlide
     */
    public function getBannerSlide()
    {
        return $this->bannerSlide;
    }

    public function getImage()
    {
        return $this;
    }
}
