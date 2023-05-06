<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\AvaTax\View\Form\Checkout;

/**
 * Checkout update profile form
 */
class UpdateProfile extends \XLite\View\Form\Checkout\UpdateProfile implements \XLite\Base\IDecorator
{
    /**
     * Get validator
     *
     * @return \XLite\Core\Validator\HashArray
     */
    protected function getValidator()
    {
        $types = array(
            'A', 'B', 'C', 'D', 'E',
            'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'N', 'P', 'Q',
            'R', 'MED1',   'MED2',
        );

        $validator = parent::getValidator();
        
        $address = $validator->getChild('shippingAddress');
        if ($address) {
            $address->addPair(
                'avaTaxExemptionNumber',
                new \XLite\Core\Validator\TypeString(false),
                \XLite\Core\Validator\Pair\APair::SOFT
            );
            $address->addPair(
                'avaTaxCustomerUsageType',
                new \XLite\Core\Validator\Enum($types),
                \XLite\Core\Validator\Pair\APair::SOFT
            );
        }

        $address = $validator->getChild('billingAddress');
        if ($address) {
            $address->addPair(
                'avaTaxExemptionNumber',
                new \XLite\Core\Validator\TypeString(false),
                \XLite\Core\Validator\Pair\APair::SOFT
            );
            $address->addPair(
                'avaTaxCustomerUsageType',
                new \XLite\Core\Validator\Enum($types),
                \XLite\Core\Validator\Pair\APair::SOFT
            );
        }

        return $validator;
    }

}
