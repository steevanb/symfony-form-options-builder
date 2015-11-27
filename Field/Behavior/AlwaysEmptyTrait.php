<?php

namespace steevanb\FormUtils\Field\Behavior;

trait AlwaysEmptyTrait
{
    use ParameterAccessors;

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
    public function getAlwaysEmpty()
    {
        return $this->getParameter('always_empty', true);
    }
}
