<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\Banner\Controller\Admin;

use XLite\Core\Database;
use XLite\Core\Request;
use XLite\Core\TopMessage;

/**
 * Select file controller
 *
 */
class SelectFile extends \XLite\Controller\Admin\SelectFile implements \XLite\Base\IDecorator
{
    /**
     * Return parameters array for "BannerEdit" target
     *
     * @return array
     */
    protected function getParamsObjectBannerEdit()
    {
        return array(
            'page' => 'images',
            'id'   => Request::getInstance()->objectId,
        );
    }

    /**
     * @param $methodToLoad
     * @param array $paramsToLoad
     * @throws \Doctrine\ORM\ORMException
     */
    protected function doActionSelectBannerEditImage($methodToLoad, array $paramsToLoad)
    {
        $bannerId = intval(Request::getInstance()->objectId);

        $banner = Database::getRepo('XLite\Module\QSL\Banner\Model\Banner')->find($bannerId);

        if (!isset($product)) {
            $product = new \XLite\Model\Product();
        }

        $image = new \XLite\Module\QSL\Banner\Model\Image();

        // Check images directory
        $image->checkFileSystemRootDir();

        if (call_user_func_array(array($image, $methodToLoad), $paramsToLoad)) {
        
            $image->setBanner($banner);

            $banner->getImages()->add($image);

            Database::getEM()->persist($image);
            Database::getEM()->flush();

            TopMessage::addInfo('The image has been updated');

        } else {

            TopMessage::addError('Failed to update image');

        }
    }

    /**
     * @throws \Doctrine\ORM\ORMException
     */
    protected function doActionSelectUploadBannerEditImage()
    {
        $this->doActionSelectBannerEditImage('loadFromRequest', array('uploaded_file'));
    }

    /**
     * @throws \Doctrine\ORM\ORMException
     */
    protected function doActionSelectUrlBannerEditImage()
    {
        $this->doActionSelectBannerEditImage(
            'loadFromURL',
            array(
                Request::getInstance()->url,
                Request::getInstance()->url_copy_to_local
            )
        );
    }


    /**
     * @throws \Doctrine\ORM\ORMException
     */
    protected function doActionSelectLocalBannerEditImage()
    {
        $file = \XLite\View\BrowseServer::getNormalizedPath(
            Request::getInstance()->local_server_file
        );

        $this->doActionSelectBannerEditImage('loadFromLocalFile', array($file));
    }
}
