<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\AttrAccessorsTrait;

trait AttrPlaceHolderTrait
{
    use AttrAccessorsTrait;

    /**
     * @param false|string $placeholder
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#placeholder
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
