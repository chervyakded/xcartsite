<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XCart\Bus\IntegrityCheck;

use XCart\Bus\Client\MarketplaceClient;
use XCart\Bus\Domain\Module;
use XCart\Bus\Exception\Rebuild\KnownHashesException;
use XCart\Bus\Query\Data\KnownHashesCacheDataSource;
use XCart\Bus\Query\Data\MarketplaceModulesDataSource;
use XCart\SilexAnnotations\Annotations\Service;

/**
 * @Service\Service()
 */
class KnownHashesRetriever extends CachedRetriever
{
    /**
     * @var MarketplaceClient
     */
    private $marketplaceClient;

    /**
     * @var KnownHashesCacheDataSource
     */
    private $hashesCacheDataSource;

    /**
     * @var MarketplaceModulesDataSource
     */
    private $marketplaceModulesDataSource;

    /**
     * @param MarketplaceClient     $marketplaceClient
     * @param KnownHashesCacheDataSource $hashesCacheDataSource
     * @param MarketplaceModulesDataSource $marketplaceModulesDataSource
     */
    public function __construct(
        MarketplaceClient $marketplaceClient,
        KnownHashesCacheDataSource $hashesCacheDataSource,
        MarketplaceModulesDataSource $marketplaceModulesDataSource
    ) {
        $this->marketplaceClient = $marketplaceClient;
        $this->hashesCacheDataSource = $hashesCacheDataSource;
        $this->marketplaceModulesDataSource = $marketplaceModulesDataSource;
    }

    /**
     * @param Module $module
     *
     * @return array
     * @throws KnownHashesException
     */
    public function getHashes($module): array
    {
        $id = md5($module->id . '|' . $module->installedVersion);

        return $this->retrieveCached(
            $id,
            function () use ($module) {
                if ($module->id !== 'CDev-Core') {
                    if ($this->marketplaceModulesDataSource->findInMarketplace($module->id)) {
                        if (!$this->marketplaceModulesDataSource->isVersionExistsInMarketplace($module->id, $module->installedVersion)) {
                            throw new KnownHashesException(
                                1022,
                                "Addon revision with specified version {$module->installedVersion} is not found"
                            );
                        }
                    } else {
                        throw new KnownHashesException(
                            1022,
                            'Cannot check the files for this custom addon'
                        );
                    }
                }

                $hashes = $this->marketplaceClient->getHashes(
                    $module->id,
                    $module->installedVersion
                );

                $lastError = $this->marketplaceClient->getLastError();
                if ($lastError) {
                    throw new KnownHashesException($lastError->getCode(), $lastError->getMessage());
                }

                return $hashes;
            }
        );
    }

    /**
     * @return mixed
     */
    protected function getCacheDataSource()
    {
        return $this->hashesCacheDataSource;
    }
}
