<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model;

/**
 * @Entity (repositoryClass="\XLite\Module\QSL\Banner\Model\Repo\BannerSlide")
 * @Table (name="banner_slide",
 *    indexes={
 *      @Index (name="ep", columns={"enabled","position"}),
 *  }
 * )
 *
 */
class BannerSlide extends \XLite\Model\Base\I18n
{
    const CONTENT_TYPE  = 'I';
    /**
     * @var integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="integer", options={"unsigned": true})
     */
    protected $id;

    /**
     * @var string
     *
     * @Column (type="string")
     */
    protected $link = '';

    /**
     * @var string
     *
     * @Column (type="string")
     */
    protected $maintext_color = '333333';

    /**
     * @var string
     *
     * @Column (type="string")
     */
    protected $addtext_color = '888888';

    /**
     * @var \XLite\Module\QSL\Banner\Model\Banner
     *
     * @ManyToOne  (targetEntity="XLite\Module\QSL\Banner\Model\Banner", inversedBy="bannerSlide", cascade={"persist","merge","detach"})
     * @JoinColumn (name="banner_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $banner;

    /**
     * @var \XLite\Module\QSL\Banner\Model\Image\Banner\Image
     *
     * @OneToOne (targetEntity="XLite\Module\QSL\Banner\Model\Image\Banner\Image", mappedBy="bannerSlide", cascade={"all"})
     * @OrderBy ({"position" = "ASC"})
     */
    protected $image;

    /**
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $position = 0;

    /**
     * @var boolean
     *
     * @Column (type="boolean")
     */
    protected $enabled = true;

    /**
     * @var boolean
     *
     * @Column (type="boolean")
     */
    protected $parallaxImage = false;

    /**
     * @param array $data Entity properties OPTIONAL
     */

    public function __construct(array $data = array())
    {
        parent::__construct($data);
    }

    /**
     * @return boolean
     */
    public function hasImage()
    {
        return !is_null($this->getImage()) && $this->getImage()->isPersistent();
    }

    /**
     * @return integer
     */
    public function getCode() {
        return $this->getId();
    }

    /**
     * @return string|null
     */
    public function getImageURL()
    {
        return $this->getImage() ? $this->getImage()->getURL() : null;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param boolean $parallaxImage
     */
    public function setParallaxImage($parallaxImage)
    {
        $this->parallaxImage = $parallaxImage;
    }

    /**
     * @return boolean
     */
    public function getParallaxImage()
    {
        return $this->parallaxImage;
    }

    /**
     * @param integer $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return boolean
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getMainTextColor()
    {
        return $this->maintext_color;
    }

    /**
     * @param string $maintext_color
     */
    public function setMainTextColor($maintext_color)
    {
        $this->maintext_color = $maintext_color;
    }

    /**
     * @return string
     */
    public function getAddTextColor()
    {
        return $this->addtext_color;
    }

    /**
     * @param string $addtext_color
     */
    public function setAddTextColor($addtext_color)
    {
        $this->addtext_color = $addtext_color;
    }

    /**
     * @param \XLite\Module\QSL\Banner\Model\Image\Banner\Image $image
     */
    public function setImage(\XLite\Module\QSL\Banner\Model\Image\Banner\Image $image = null)
    {
        $this->image = $image;
    }

    /**
     * @return \XLite\Module\QSL\Banner\Model\Image\Banner\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \XLite\Module\QSL\Banner\Model\Banner $banner
     */
    public function setBanner(\XLite\Module\QSL\Banner\Model\Banner $banner)
    {
        $this->banner = $banner;
    }

    /**
     * @return \XLite\Module\QSL\Banner\Model\Banner
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * @return string
     */
    public function getEventCell()
    {
        return self::CONTENT_TYPE;
    }

    /**
     * @return string|null
     */
    public function getActionButtonLink()
    {
        return $this->getLink() ?: \Includes\Utils\URLManager::getCurrentURL() . '#';
    }
}
