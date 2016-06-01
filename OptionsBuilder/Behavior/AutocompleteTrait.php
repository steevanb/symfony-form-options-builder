<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait AutocompleteTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    abstract public function addAttr($name, $value);

    /**
     * @param string $name
     * @return array|mixed
     */
    abstract public function getAttr($name = null);

    /**
     * @param string $name
     * @return $this
     */
    abstract public function removeAttr($name);

    /**
     * @param bool $autocomplete
     * @return $this
     */
    public function setAutocomplete($autocomplete = true)
    {
        if ($autocomplete) {
            return $this->removeAttr('autocomplete');
        } else {
            return $this->addAttr('autocomplete', 'off');
        }
    }

    /**
     * @return bool
     */
    public function getAutocomplete()
    {
        return $this->getAttr('autocomplete') !== 'off';
    }
}
