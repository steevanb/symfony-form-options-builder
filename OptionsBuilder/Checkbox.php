<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\OptionsBuilder\Behavior\OptionAccessorsTrait;

class Checkbox extends AbstractOptionsBuilder
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
     * @param int $default
     * @return mixed
     */
    public function getValue($default = 1)
    {
        return $this->getOption('value', $default);
    }
}
