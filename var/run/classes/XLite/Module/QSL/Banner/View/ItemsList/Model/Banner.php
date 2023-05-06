<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\View\ItemsList\Model;

/**
 * Banner page view
 *
 */
class Banner extends \XLite\View\ItemsList\Model\Table
{

    /**
     * Define columns structure
     *
     * @return array
     */
    protected function defineColumns()
    {
        return array(
            'title' => array(
                static::COLUMN_NAME    => \XLite\Core\Translation::lbl('Service name'),
                static::COLUMN_NO_WRAP => true,
                static::COLUMN_PARAMS       => array('required' => true),
                static::COLUMN_LINK    => 'banner_edit',
            ),
            'location' => array(
                static::COLUMN_NAME    => \XLite\Core\Translation::lbl('Location'),
                static::COLUMN_CLASS   => 'XLite\Module\QSL\Banner\View\FormField\LayoutType',
                static::COLUMN_NO_WRAP => true,
            ),
        );
    }

    /**
     * Define repository name
     *
     * @return string
     */
    protected function defineRepositoryName()
    {
        return 'XLite\Module\QSL\Banner\Model\Banner';
    }

    /**
     * Mark list as switchable (enable / disable)
     *
     * @return boolean
     */
    protected function isSwitchable()
    {
        return true;
    }

    /**
     * Mark list as removable
     *
     * @return boolean
     */
    protected function isRemoved()
    {
        return true;
    }

    /**
     * Mark list as sortable
     *
     * @return integer
     */
    protected function getSortableType()
    {
        return static::SORT_TYPE_MOVE;
    }

    /**
     * Get create entity URL
     *
     * @return string
     */
    protected function getCreateURL()
    {
        return \XLite\Core\Converter::buildUrl('banner_edit');
    }

    /**
     * Get create button label
     *
     * @return string
     */
    protected function getCreateButtonLabel()
    {
        return 'New banner';
    }

    /**
     * Creation button position
     *
     * @return integer
     */
    protected function isCreation()
    {
        return static::CREATE_INLINE_TOP;
    }


}