<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View;

/**
 * Recover password dialog
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class RecoverPasswordAdmin extends \XLite\View\AView
{
    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'recover_password';

        return $result;
    }

    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = 'unauthorized/style.less';
        $list[] = $this->getDir() . '/style.less';

        return $list;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        $mode            = strval(\XLite\Core\Request::getInstance()->mode);
        $templatesByMode = [
            'recoverMessage'   => '/recover_message.twig',
            'enterNewPassword' => '/enter_new_password.twig',
        ];
        return $this->getDir() . ( $templatesByMode[$mode] ?? '/recover_password.twig');
    }

    protected function getTitle()
    {
        return static::t('Forgot your password?');
    }

    protected function getMessageFirstLine()
    {
        return static::t('To recover your password, please type in the valid e-mail address you use as a login');
    }

    protected function getMessageSecondLine()
    {
        return static::t('The confirmation URL link will be emailed to you shortly');
    }

    /**
     * Defines directory where the templates and stylesheets are stored
     *
     * @return string
     */
    protected function getDir()
    {
        return 'password_recovery_admin';
    }
}
