<?php

namespace steevanb\FormUtils\OptionsBuilder;

class AbstractOptionBuilder
{
    /** @var array */
    protected $options = array();

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function setOption($name, $value)
    {
        $this->options[$name] = $value;

        return $this;
    }

    /**
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getOption($name, $default = null)
    {
        return (array_key_exists($name, $this->options)) ? $this->options[$name] : $default;
    }

    /**
     * @return array
     */
    public function asArray()
    {
        return $this->options;
    }
}
