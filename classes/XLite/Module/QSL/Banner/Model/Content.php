<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model;

/**
 * Banner image
 *
 * @Entity 
 * @Table  (name="banner_contents")
 */
class Content extends \XLite\Model\Base\I18n
{
    /**
     *  Unique id
     *
     * @var   integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="integer", options={"unsigned": true})
     */
     protected $content_id;

     const CONTENT_TYPE  = 'C';

    /**
     * Position
     *
     * @var   integer
     *
     * @Column (type="integer")
     */
     protected $position = 5;

    /**
     * Relation to a product entity
     *
     * @var  \Doctrine\Common\Collections\ArrayCollection 
     *
     * @ManyToOne  (targetEntity="XLite\Module\QSL\Banner\Model\Banner", inversedBy="contents")
     * @JoinColumn (name="banner_id", referencedColumnName="id")
     */
     protected $banner;

     /**
     * Get event cell base information
     *
     * @return array
     */
    public function getEventCell()
    {
            return self::CONTENT_TYPE;
    }

    /**
     * Set image
     *
     * @param \XLite\Module\QSL\Banner\Model\Banner $banner
     * @return Content
     */
    public function setBanner(\XLite\Module\QSL\Banner\Model\Banner $banner)
    {
        $this->banner = $banner;
        return $this;
    }


    /**
     * Get image
     *
     * @return \XLite\Module\QSL\Banner\Model\Banner
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Content
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getPosition()
    {
        return $this->position;
    }
}