<?php

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\FormField;

use XLite\View\FormField\AFormField;

class TrialPeriod extends AFormField
{
    const FIELD_TYPE_TRIAL_PERIOD = 'trial_period';

    /**
     * @inheridoc
     */
    public function getFieldType()
    {
        return static::FIELD_TYPE_TRIAL_PERIOD;
    }

    /**
     * @inheridoc
     */
    protected function getDir()
    {
        return 'modules/XPay/XPaymentsCloud/form_field/trial_period/';
    }

    /**
     * @inheridoc
     */
    protected function getFieldTemplate()
    {
        return 'body.twig';
    }

    /**
     * @inheridoc
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = $this->getDir() . 'style.css';

        return $list;
    }

}
