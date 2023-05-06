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
 * @Table  (name="banner_contents_translations",
 *    indexes={
 *      @Index (name="ci", columns={"code","id"}),
 *      @Index (name="id", columns={"id"})
 *   }
 * )
 */
class ContentTranslation extends \XLite\Model\Base\Translation
{
    /**
     * HTML code
     *
     * @var   string
     *
     * @Column (type="text")
     */
     protected $content = '';

}