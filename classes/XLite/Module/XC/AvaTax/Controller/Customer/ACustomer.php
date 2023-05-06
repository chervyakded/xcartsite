<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\Controller\Customer;

/**
 * Abstract customer
 */
class ACustomer extends \XLite\Controller\Customer\ACustomer implements \XLite\Base\IDecorator
{
    /**
     * Get fingerprint difference
     *
     * @param array $old Old fingerprint
     * @param array $new New fingerprint
     *
     * @return array
     */
    protected function getCartFingerprintDifference(array $old, array $new)
    {
        $diff = parent::getCartFingerprintDifference($old, $new);

        if (
            isset($old['avaTaxErrorsFlag'])
            && isset($new['avaTaxErrorsFlag'])
            && $old['avaTaxErrorsFlag'] != $new['avaTaxErrorsFlag']
        ) {
            $diff['avaTaxErrorsFlag'] = $new['avaTaxErrorsFlag'];
        }

        return $diff;
    }
}
