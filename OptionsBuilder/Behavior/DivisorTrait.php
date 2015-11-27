<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

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
     * @param null|int $default
     * @return int
     */
    public function getDivisor($default = 1)
    {
        return $this->getOption('divisor', $default);
    }
}
