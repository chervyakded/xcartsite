<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Model\Profile;

class EnterNewPassword extends \XLite\View\Model\Profile\ForceChangePassword
{
    const SCHEMA_FIELD_REQUEST_ID = 'request_id';
    const SCHEMA_FIELD_EMAIL      = 'email';

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();

        if (\XLite::isAdminZone() && \XLite\Core\Request::getInstance()->mode === 'enterNewPassword') {
            $result[] = 'recover_password';
        }

        return $result;
    }

    /**
     * @return array
     */
    public function getCSSFiles()
    {
        return array_merge(parent::getCSSFiles(), [
            'recover_password/enter_new_password/main.css',
        ]);
    }

    /**
     * @param string $name Field name
     *
     * @return mixed
     */
    public function getDefaultFieldValue($name)
    {
        $value = parent::getDefaultFieldValue($name);

        switch ($name) {
            case self::SCHEMA_FIELD_REQUEST_ID:
                $value = \XLite\Core\Request::getInstance()->{self::SCHEMA_FIELD_REQUEST_ID};
                break;
            case self::SCHEMA_FIELD_EMAIL:
                $value = \XLite\Core\Request::getInstance()->{self::SCHEMA_FIELD_EMAIL};
                break;

            default:
        }

        return $value;
    }

    /**
     * Return text for header
     *
     * @return string
     */
    protected function getHeaderText()
    {
        return '';
    }

    protected function getFormFieldsForSectionMain()
    {
        $this->mainSchema[self::SCHEMA_FIELD_REQUEST_ID] = [
            self::SCHEMA_CLASS                                    => '\XLite\View\FormField\Input\Hidden',
            self::SCHEMA_FIELD_ONLY                               => false,
            self::SCHEMA_REQUIRED                                 => false,
            \XLite\View\FormField\AFormField::PARAM_WRAPPER_CLASS => 'hidden',
        ];

        $this->mainSchema[self::SCHEMA_FIELD_EMAIL] = [
            self::SCHEMA_CLASS                                    => '\XLite\View\FormField\Input\Hidden',
            self::SCHEMA_FIELD_ONLY                               => false,
            self::SCHEMA_REQUIRED                                 => false,
            \XLite\View\FormField\AFormField::PARAM_WRAPPER_CLASS => 'hidden',
        ];

        return parent::getFormFieldsForSectionMain();

    }

    /**
     * Return name of web form widget class
     *
     * @return string
     */
    protected function getFormClass()
    {
        return '\XLite\View\Form\Profile\EnterNewPassword';
    }
}
