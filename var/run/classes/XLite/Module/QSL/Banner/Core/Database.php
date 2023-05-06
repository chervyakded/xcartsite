<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Core;

/**
 * Database
 */
abstract class Database extends \XLite\Module\QSL\CloudSearch\Core\DatabaseDecorator implements \XLite\Base\IDecorator
{
    /**
     * Post process schemas
     *
     * @param array  $schemas Schemas
     * @param string $mode    Schema generation mode OPTIONAL
     *
     * @return array
     */
    protected function postprocessSchema($schemas, $mode = self::SCHEMA_CREATE)
    {
        $result = parent::postprocessSchema($schemas, $mode);

        $tmp1 = array();
        $tmp2 = array();

        foreach ($result as $query) {
            if (false === strpos($query, 'ADD CONSTRAINT')) {
                $tmp1[] = $query;
            } else {
                $tmp2[] = $query;
            }
        }

        return array_merge($tmp1, $tmp2);
    }
}
