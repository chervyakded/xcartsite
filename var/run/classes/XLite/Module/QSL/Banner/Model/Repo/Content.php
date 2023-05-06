<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model\Repo;

/**
 * Product image
 *
 */
class Content extends \XLite\Model\Repo\ARepo
{
    /**
     * Default 'orderby' field name
     *
     * @var   string
     */
    protected $defaultOrderBy = 'position';

    /**
     * Get last order by
     *
     * @return \Doctrine\ORM\PersistentCollection
     */
    public function getLastOrderBy()
    {
        return $this->findLastOrderBy()->getSingleScalarResult();
    }

    /**
     * Find last order by
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    protected function findLastOrderBy()
    {
        return $this->createQueryBuilder()->select('MAX(c.position)');
    }

}
