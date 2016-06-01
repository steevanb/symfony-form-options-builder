<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait OptionAccessorsTrait
{
    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    abstract public function setOption($name, $value);

    /**
     * @param string $name
     * @return mixed
     */
    abstract public function getOption($name);

    /**
     * @param string $name
     * @return $this
     */
    abstract public function removeOption($name);
}
