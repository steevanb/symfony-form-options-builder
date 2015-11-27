<?php

namespace steevanb\FormUtils\Field\Behavior;

trait CurrencyTrait
{
    use OptionAccessorsTrait;

    /**
     * @param false|string $currency
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/money.html#currency
     */
    public function setCurrency($currency)
    {
        return $this->setOption('currency', $currency);
    }

    /**
     * @param null|string $default
     * @return false|string
     */
    public function getCurrency($default = 'EUR')
    {
        return $this->getOption('currency', $default);
    }
}
