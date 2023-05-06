<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\FormField\Select;

/**
 *    Banner System selector
 */
class SelectEffect extends \XLite\View\FormField\Select\Regular
{
    /**
     * Register banner location values
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        return array(
            'fade'  => static::t('Fade'),
            'fadeout'  => static::t('Fadeout'),
            'scrollHorz' => static::t('Scroll horizontally'),
            'scrollVert' => static::t('Scroll vertically'),
            'flipHorz' => static::t('Flip horizontally'),
            'flipVert' => static::t('Flip vertically'),
            'tileSlideVert' => static::t('Tile slide vertically'),//
            'tileBlindVert' => static::t('Tile blind vertically'),
            'tileSlideHorz' => static::t('Tile slide horizontally'),//
            'tileBlindHorz' => static::t('Tile blind horizontally'),
        );
    }
}