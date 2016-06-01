<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait AttrAccessorsTrait {
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
}
