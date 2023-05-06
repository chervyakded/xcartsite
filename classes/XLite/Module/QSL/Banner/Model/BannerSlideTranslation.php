<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model;

/**
 * @Entity
 * @Table  (name="banner_slide_translations",
 *    indexes={
 *      @Index (name="ci", columns={"code","id"}),
 *      @Index (name="id", columns={"id"})
 *   }
 * )
 */
class BannerSlideTranslation extends \XLite\Model\Base\Translation
{
    /**
     * @var string
     *
     * @Column (type="string")
     */
    protected $maintext = '';

    /**
     * @var string
     *
     * @Column (type="string")
     */
    protected $addtext = '';

    /**
     * @var string
     *
     * @Column (type="string", nullable=true)
     */
    protected $actionButton = 'Find out more';

    /**
     * @param $maintext
     */
    public function setMaintext($maintext)
    {
        $this->maintext = $maintext;
    }

    /**
     * @return string
     */
    public function getMaintext()
    {
        return $this->maintext;
    }

    /**
     * @param $maintext
     */
    public function setAddtext($addtext)
    {
        $this->addtext = $addtext;
    }

    /**
     * @return string
     */
    public function getAddtext()
    {
        return $this->addtext;
    }

    /**
     * @param $actionButton
     */
    public function setActionButton($actionButton)
    {
        $this->actionButton = $actionButton;
    }

    /**
     * @return string
     */
    public function getActionButton()
    {
        return $this->actionButton;
    }
}
