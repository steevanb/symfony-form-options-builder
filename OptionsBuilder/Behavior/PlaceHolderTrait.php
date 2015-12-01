<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait PlaceHolderTrait
{
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
     * @param false|string $placeholder
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#placeholder
     */
    public function setPlaceHolder($placeholder)
    {
        return $this->addAttr('placeholder', $placeholder);
    }

    /**
     * @return false|string
     */
    public function getPlaceHolder()
    {
        return $this->getAttr('placeholder');
    }
}
