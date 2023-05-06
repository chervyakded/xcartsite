<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Console\Command\InAppMarketplace;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ListLicenses extends AMarketplace
{
    protected function configure(): void
    {
        $this
            ->setName('marketplace:list-licenses')
            ->setDescription('List licenses <info>[!] BETA</info>')
            ->setHelp('');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('List licenses <info>[!] BETA</info>');

        $list = \XLite\Core\Marketplace\Retriever::getInstance()->retrieve(
            \XLite\Core\Marketplace\QueryRegistry::getQuery('licenses'),
            new \XLite\Core\Marketplace\Normalizer\Simple('licenses')
        ) ?: [];

        $io->table(['Name', 'License key'], $list);

        return $this->reportSuccess($io);
    }
}
