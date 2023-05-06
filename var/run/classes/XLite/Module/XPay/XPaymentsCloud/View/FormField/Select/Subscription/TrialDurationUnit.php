<?php

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\View\FormField\Select\Subscription;

use XLite\Module\XPay\XPaymentsCloud\Model\Subscription\Base\ASubscriptionPlan as Plan;
use XLite\View\FormField\Select\ASelect;

class TrialDurationUnit extends ASelect
{
    /**
     * @inheridoc
     */
    protected function getDefaultOptions()
    {
        return [
            Plan::TRIAL_DURATION_UNIT_DAY   => static::t('xps.days'),
            Plan::TRIAL_DURATION_UNIT_WEEK  => static::t('xps.weeks'),
            Plan::TRIAL_DURATION_UNIT_MONTH => static::t('xps.months'),
            Plan::TRIAL_DURATION_UNIT_YEAR  => static::t('xps.years'),
        ];
    }

}
