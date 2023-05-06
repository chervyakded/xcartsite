<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model;

/**
 * @Decorator\Depend ("CDev\SimpleCMS")
 */
 class BannerWithSimpleCMS extends \XLite\Module\QSL\Banner\Model\BannerAbstract implements \XLite\Base\IDecorator
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany (targetEntity="XLite\Module\CDev\SimpleCMS\Model\Page", inversedBy="banners")
     * @JoinTable (name="banner_page",
     *      joinColumns={@JoinColumn (name="banner_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@JoinColumn (name="id", referencedColumnName="id", onDelete="CASCADE")}
     * )
     */
    protected $pages;

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();

        parent::__construct($data);
    }

    /**
     * Add pages
     *
     * @param \XLite\Module\CDev\SimpleCMS\Model\Page $pages
     * @return Banner
     */
    public function addPages(\XLite\Module\CDev\SimpleCMS\Model\Page $pages)
    {
        $this->pages[] = $pages;
        return $this;
    }

    /**
     * Get memberships
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Clear memberships
     */
    public function clearPages()
    {
        foreach ($this->getPages()->getKeys() as $key) {
            $this->getPages()->remove($key);
        }
    }
}
