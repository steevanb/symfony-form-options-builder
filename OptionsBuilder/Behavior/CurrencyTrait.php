<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait CurrencyTrait
{
    use OptionAccessorsTrait;

    /**
     * @param false|string $currency
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/money.html#currency
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
