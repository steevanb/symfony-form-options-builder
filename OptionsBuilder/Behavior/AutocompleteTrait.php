<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\AttrAccessorsTrait;
use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait AutocompleteTrait
{
    use OptionAccessorsTrait;
    use AttrAccessorsTrait;

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
