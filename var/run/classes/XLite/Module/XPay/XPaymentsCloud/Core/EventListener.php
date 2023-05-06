<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\Core;

use XLite\Module\XPay\XPaymentsCloud\Core\EventListener\ClearCCData;

 class EventListener extends \XLite\Core\EventListenerAbstract implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    protected function getListeners()
    {
        return parent::getListeners() + [
                'clearCreditCardsData' => [ClearCCData::class]
            ];
    }

}
