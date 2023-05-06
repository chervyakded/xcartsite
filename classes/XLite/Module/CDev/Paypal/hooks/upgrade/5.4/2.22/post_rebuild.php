<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    // Loading data to the database from yaml file
    $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';

    if (\Includes\Utils\FileManager::isFileReadable($yamlFile)) {
        \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);
    }

    \XLite\Core\Database::getEM()->flush();

    $fundingList = \XLite\Core\Database::getRepo('XLite\Model\Payment\MethodSetting')
        ->findOneBy(['name' => 'disabledFundingMethods']);

    if (!empty($fundingList)) {
        $list = json_decode($fundingList->getValue());
        if (in_array('venmo', $list)) {
            $updatedList = array_diff($list, ['venmo']);
            $fundingList->setValue(json_encode(array_values($updatedList)));

            $venmoFlag = \XLite\Core\Database::getRepo('XLite\Model\Payment\MethodSetting')
                ->findOneBy(['name' => 'venmoEnabled']);
            $venmoFlag->setValue(0);
        }
    }

    \XLite\Core\Database::getEM()->flush();
};
