<?php

namespace steevanb\FormUtils\Field\Behavior;

trait CurrencyTrait
{
    use ParameterAccessors;

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
     * @param null|string $default
     * @return false|string
     */
    public function getCurrency($default = 'EUR')
    {
        return $this->getParameter('currency', $default);
    }
}
