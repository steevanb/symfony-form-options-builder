<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

trait PlaceHolderTrait
{
    use OptionAccessorsTrait;

    /**
     * @param false|string $placeholder
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#placeholder
     */
    public function setPlaceHolder($placeholder)
    {
        return $this->setOption('placeholder', $placeholder);
    }

    /**
     * @return false|string
     */
    public function getPlaceHolder()
    {
        return $this->getOption('placeholder');
    }
}
