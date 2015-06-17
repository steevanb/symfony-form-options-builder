<?php

namespace steevanb\FormUtils\Fields\Traits;

trait AlwaysEmpty
{
    /**
     * @param bool $alwaysEmpty
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/password.html#always-empty
     */
    public function setAlwaysEmpty($alwaysEmpty)
    {
        return $this->setParameter('always_empty', $alwaysEmpty);
    }

    /**
     * @return int
     */
    public function getDivisor()
    {
        return $this->getAlwaysEmpty('always_empty', true);
    }
}
