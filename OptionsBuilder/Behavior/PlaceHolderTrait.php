<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait PlaceHolderTrait
{
    use OptionAccessorsTrait;

    /**
     * @param false|string $placeholder
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#placeholder
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
