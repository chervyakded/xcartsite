<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Model\Repo;

/**
 * Pages repository
 *
 * @Decorator\Depend ("CDev\SimpleCMS")
 */
 class Page extends \XLite\Module\QSL\CloudSearch\Model\Repo\Page implements \XLite\Base\IDecorator
{
    /**
     * Find all enabled languages
     *
     * @return array
     */
    public function findActivePages()
    {
        return $this->defineActivepagesQuery()->getResult();
    }

    /**
     * Define query builder for findActivePages()
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    protected function defineActivepagesQuery()
    {
        return $this->createQueryBuilder()
            ->where('p.enabled = :true')
            ->setParameter('true', true);
    }

    // }}}

}
