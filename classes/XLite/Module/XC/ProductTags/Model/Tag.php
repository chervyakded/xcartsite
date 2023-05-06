<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ProductTags\Model;

/**
 * @Entity
 * @Table (name="tags")
 * @HasLifecycleCallbacks
 */
class Tag extends \XLite\Model\Base\I18n
{
    /**
     * @var integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="integer", options={ "unsigned": true })
     */
    protected $id;

    /**
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $position = 0;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany (targetEntity="XLite\Model\Product", mappedBy="tags")
     */
    protected $products;

    /**
     * @param array $data Entity properties OPTIONAL
     */
    public function __construct(array $data = [])
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();

        parent::__construct($data);
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @deprecated 5.4
     * @see addProduct
     *
     * @param \XLite\Model\Product $products
     * @return Tag
     */
    public function addProducts(\XLite\Model\Product $products)
    {
        return $this->addProduct($products);
    }

    /**
     * @param \XLite\Model\Product $product
     *
     * @return Tag
     */
    public function addProduct(\XLite\Model\Product $product)
    {
        if (
            !$this->products
            || !$this->products->contains($product)
        ) {
            $this->products[] = $product;
        }

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }
}
