<?php

namespace steevanb\FormUtils\Fields\Traits;

trait PlaceHolder
{
    use ParameterAccessors;

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
