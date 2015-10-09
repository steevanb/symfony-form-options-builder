<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Autocomplete
{
    use ParameterAccessors;

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
            return $this->addAttr('autocomplete', '');
        } else {
            return $this->removeAttr('autocomplete');
        }
    }

    /**
     * @return bool
     */
    public function getAutocomplete()
    {
        return $this->getAttr('autocomplete') !== null;
    }
}
