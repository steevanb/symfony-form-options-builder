<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\AttrAccessorsTrait;

trait AttrPlaceHolderTrait
{
    use AttrAccessorsTrait;

    /**
     * @param false|string $placeholder
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#placeholder
     */
    public function setAttrPlaceHolder($placeholder)
    {
        return $this->addAttr('placeholder', $placeholder);
    }

    /**
     * @return false|string
     */
    public function getAttrPlaceHolder()
    {
        return $this->getAttr('placeholder');
    }
}
