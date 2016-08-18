<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait ScaleTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int $scale
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/integer.html#scale
     */
    public function setScale($scale)
    {
        return $this->setOption('scale', $scale);
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return $this->getOption('scale');
    }
}
