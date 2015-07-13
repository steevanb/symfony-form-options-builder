<?php

namespace steevanb\FormUtils\Fields;

class Checkbox extends AbstractField
{
    use Traits\FormType;

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
     * @return mixed
     */
    public function getValue($default = 1)
    {
        return $this->getParameter('value', $default);
    }
}
