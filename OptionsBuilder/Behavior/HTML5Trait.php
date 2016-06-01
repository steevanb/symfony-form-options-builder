<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait HTML5Trait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $html5
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#html5
     */
    public function setHTML5($html5 = true)
    {
        return $this->setOption('html5', $html5);
    }

    /**
     * @return bool
     */
    public function getHTML5()
    {
        return $this->getOption('html5');
    }
}
