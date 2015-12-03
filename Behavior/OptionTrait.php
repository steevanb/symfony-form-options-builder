<?php

namespace steevanb\FormUtils\Behavior;

trait OptionTrait
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
        if ($value === Option::DEFAULT_VALUE) {
            $this->removeOption($name);
        } else {
            $this->options[$name] = $value;
        }

        return $this;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getOption($name)
    {
        return (array_key_exists($name, $this->options)) ? $this->options[$name] : Option::DEFAULT_VALUE;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function removeOption($name)
    {
        if (array_key_exists($name, $this->options)) {
            unset($this->options[$name]);
        }

        return $this;
    }
}
