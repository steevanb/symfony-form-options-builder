<?php

namespace steevanb\FormUtils\Field;

class Checkbox extends AbstractField
{
    use Behavior\FormTypeTrait;

    /**
     * @param mixed $value
     * @return $this
     * @link http://symfony.com/fr/doc/current/reference/forms/types/checkbox.html#value
     */
    public function setValue($value)
    {
        return $this->setParameter('value', $value);
    }

    /**
     * @param int $default
     * @return mixed
     */
    public function getValue($default = 1)
    {
        return $this->getParameter('value', $default);
    }
}
