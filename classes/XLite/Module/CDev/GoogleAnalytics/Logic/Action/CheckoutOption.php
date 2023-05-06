<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoogleAnalytics\Logic\Action;

use XLite;
use XLite\Controller\Customer\Checkout;
use XLite\Module\CDev\GoogleAnalytics\Core\GA;
use XLite\Module\CDev\GoogleAnalytics\Logic\Action\Interfaces\IAction;

/**
 * Class CheckoutOption
 *
 * @deprecated
 */
class CheckoutOption implements IAction
{
    protected $option;

    protected $step;

    /**
     * CheckoutOption constructor.
     *
     * @param string       $option
     * @param integer|null $step
     *
     * @internal param array $data
     */
    public function __construct(string $option, int $step = null)
    {
        $this->option = $option;
        $this->step   = $step;
    }

    public function isApplicable(): bool
    {
        return GA::getResource()->isECommerceEnabled()
            && XLite::getController() instanceof Checkout;
    }

    /**
     * @param int|null $returnParams
     *
     * @return array
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    public function getActionData(?int $returnParams = null)
    {
        return [
            'ga-type'   => 'checkout-option',
            'ga-action' => 'checkout',
            'data'      => $this->getCheckoutOptionActionData(),
        ];
    }

    protected function getCheckoutOptionActionData(): array
    {
        $data = [
            'option' => $this->option,
        ];

        if ($this->step) {
            $data['step'] = $this->step;
        }

        return $data;
    }
}
