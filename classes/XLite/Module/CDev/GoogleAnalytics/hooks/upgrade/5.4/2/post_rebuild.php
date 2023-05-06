<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

/** @noinspection StaticClosureCanBeUsedInspection */

use Includes\Utils\FileManager;
use XLite\Core\Database;
use XLite\Model\Config;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;

return function () {
    // Loading data to the database from yaml file
    $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';

    $needResetCodeVersionToUniversal = needResetCodeVersionToUniversal();

    if (FileManager::isFileReadable($yamlFile)) {
        Database::getInstance()->loadFixturesFromYaml($yamlFile);
    }

    if ($needResetCodeVersionToUniversal) {
        setCodeVersion(GA::CODE_VERSION_U);
    }

    Database::getEM()->flush();
};

function needResetCodeVersionToUniversal(): bool
{
    $codeVersionOption = Database::getRepo(Config::class)->findOneBy([
        'category' => 'CDev\GoogleAnalytics',
        'name'     => 'ga_code_version',
    ]);

    return $codeVersionOption && $codeVersionOption->getValue() !== GA::CODE_VERSION_4;
}

function setCodeVersion($value)
{
    Database::getRepo(Config::class)->createOption(
        [
            'category' => 'CDev\GoogleAnalytics',
            'name'     => 'ga_code_version',
            'value'    => $value,
        ]
    );
}
