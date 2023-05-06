<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    $labels = \XLite\Core\Database::getRepo('XLite\Model\LanguageLabel')->findBy([
        'name' => [
            'Automate Shipping Refunds',
        ],
    ]);

    foreach ($labels as $label) {
        \XLite\Core\Database::getEM()->remove($label);
    }

    // Loading data to the database from yaml file
    $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';
    \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);

    \XLite\Core\Database::getEM()->flush();
};
