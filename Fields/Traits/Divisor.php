<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Divisor
{
    /**
     * @param int $divisor
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/money.html#divisor
     */
    public function setDivisor($divisor)
    {
        $this->setParameter('divisor', $divisor);
    }

    /**
     * @return int
     */
    public function getDivisor()
    {
        return $this->getParameter('divisor', 1);
    }
}
