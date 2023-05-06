<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Controller\Admin;

/**
 * Custom CSS images controller
 */
class Images extends \XLite\Controller\Admin\Images implements \XLite\Base\IDecorator
{
    /**
     * Update action
     *
     * @return void
     */
    protected function doActionUpdate()
    {
        $this->updateCustomImages();

        parent::doActionUpdate();
    }

    /**
     * Update custom images
     *
     * @return void
     */
    protected function updateCustomImages()
    {
        $data = \XLite\Core\Request::getInstance()->getData();

        if (isset($data['new'])) {
            foreach ($data['new'] as $file) {
                $temporaryFile = isset($file['image']['temp_id'])
                    ? \XLite\Core\Database::getRepo('\XLite\Model\TemporaryFile')->find($file['image']['temp_id'])
                    : null;

                $tmpPath = $temporaryFile ? $temporaryFile->getStoragePath() : null;
                if ($tmpPath
                    && \Includes\Utils\FileManager::isImage($tmpPath)
                    && \Includes\Utils\FileManager::isImageExtension($tmpPath)
                ) {
                    $dir = \XLite\Module\XC\ThemeTweaker\Main::getThemeDir() . 'images' . LC_DS;
                    \Includes\Utils\FileManager::move($tmpPath, $dir . basename($tmpPath));

                    \XLite\Core\Database::getEM()->remove($temporaryFile);
                }
            }

            \XLite\Core\Database::getEM()->flush();
        }

        $delete = \XLite\Core\Request::getInstance()->delete;

        if (
            $delete
            && is_array($delete)
        ) {
            foreach ($delete as $path => $id) {
                \Includes\Utils\FileManager::deleteFile($path);
            }
        }
    }
}
