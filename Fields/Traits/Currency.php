<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Currency
{
    /**
     * @param false|string $currency
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/money.html#currency
     */
    public function setCurrency($currency)
    {
        return $this->setParameter('currency', $currency);
    }

    /**
     * @return false|string
     */
    public function getCurrency()
    {
        return $this->getParameter('currency', 'EUR');
    }
}
