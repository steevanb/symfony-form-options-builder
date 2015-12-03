<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

trait AutofocusTrait
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
