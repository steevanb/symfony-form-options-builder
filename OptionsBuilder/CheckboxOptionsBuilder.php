<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

class CheckboxOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;

    /**
     * @param mixed $value
     * @return $this
     * @link http://symfony.com/fr/doc/current/reference/forms/types/checkbox.html#value
     */
    public function setValue($value)
    {
        return $this->setOption('value', $value);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->getOption('value');
    }
}
