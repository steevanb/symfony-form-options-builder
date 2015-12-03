<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

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
     * @return false|string
     */
    public function getCurrency()
    {
        return $this->getOption('currency');
    }
}
