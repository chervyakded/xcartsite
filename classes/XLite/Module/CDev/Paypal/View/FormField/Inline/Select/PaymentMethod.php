<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\FormField\Inline\Select;

class PaymentMethod extends \XLite\View\FormField\Inline\Select\PaymentMethod implements \XLite\Base\IDecorator
{
    /**
     * @param array $field Field
     *
     * @return string
     */
    protected function getViewValue(array $field)
    {
        $entity = $this->getEntity();
        if ($entity->getPaymentMethod()) {
            if ($entity->getOrder()->isPaypalCommercePlatform($entity->getPaymentMethod())) {
                return $entity->getOrder()->getPaymentMethodName();
            }
        }

        return parent::getViewValue($field);
    }
}
