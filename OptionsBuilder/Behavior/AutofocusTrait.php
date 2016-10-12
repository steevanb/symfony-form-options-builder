<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\AttrAccessorsTrait;
use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait AutofocusTrait
{
    use OptionAccessorsTrait;
    use AttrAccessorsTrait;

    /**
     * @param string $name
     * @return $this
     */
    abstract public function removeAttr($name);

    /**
     * @param bool $autofocus
     * @return $this
     */
    public function setAutofocus($autofocus = true)
    {
        if ($autofocus) {
            return $this->addAttr('autofocus', '');
        } else {
            return $this->removeAttr('autofocus');
        }
    }

    /**
     * @return bool
     */
    public function getAutofocus()
    {
        return $this->getAttr('autofocus') !== null;
    }
}
