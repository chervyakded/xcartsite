<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

require_once dirname(__DIR__) . '/service-tool/vendor/autoload.php';

$dotenv = new \Symfony\Component\Dotenv\Dotenv();
$dotenv->loadEnv(dirname(__DIR__) . '/.env');

require_once __DIR__ . '/upgrade_54_to_55/functions.php';

clearServiceToolCache();
createServiceToolTables();
createSession();

$webDir = rtrim($_ENV['XCART_HOST_DETAILS_WEB_DIR'] ?? '', '/');

header("Location: {$webDir}/service.php/upgrade-54-to-55",TRUE,301);
exit();
