<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait DivisorTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int $divisor
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/money.html#divisor
     */
    public function setDivisor($divisor)
    {
        return $this->setOption('divisor', $divisor);
    }

    /**
     * @return int
     */
    public function getDivisor()
    {
        return $this->getOption('divisor');
    }
}
