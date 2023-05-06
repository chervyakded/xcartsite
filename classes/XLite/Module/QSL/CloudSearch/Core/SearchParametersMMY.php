<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Core;

use XLite\Core\Config;
use XLite\Module\QSL\CloudSearch\Model\Repo\Product;
use XLite\Module\QSL\Make\Model\Repo\Product as MakeProduct;
use XLite\Module\QSL\Make\View\FormField\Select\FilteringMode;


/**
 * Produces CloudSearch search parameters from CommonCell conditions
 *
 * @Decorator\Depend({"QSL\Make"})
 */
class SearchParametersMMY extends \XLite\Module\QSL\CloudSearch\Core\SearchParameters implements \XLite\Base\IDecorator
{
    /**
     * Get search parameters
     *
     * @return array
     */
    public function getParameters()
    {
        $data = parent::getParameters();

        if ($this->cnd->{MakeProduct::P_LEVEL_PRODUCT}) {
            $data['conditions']['mmy'] = [
                'level_' . $this->cnd->{MakeProduct::P_LEVEL_PRODUCT}
            ];

            $mapping = [
                FilteringMode::OPTION_SPECIFIC                            => 1000,
                FilteringMode::OPTION_SPECIFIC_AND_UNIVERSAL              => 100,
                FilteringMode::OPTION_SPECIFIC_AND_UNIVERSAL_AND_REGULAR  => 10,
            ];

            $data['mmy_filtering_mode'] = $mapping[Config::getInstance()->QSL->Make->filtering_mode];
        }

        return $data;
    }
}
