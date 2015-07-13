<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Divisor
{
    use ParameterAccessors;

    /**
     * @param int $divisor
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/money.html#divisor
     */
    public function setDivisor($divisor)
    {
        return $this->setParameter('divisor', $divisor);
    }

    /**
     * @param null|int $default
     * @return int
     */
    public function getDivisor($default = 1)
    {
        return $this->getParameter('divisor', $default);
    }
}
