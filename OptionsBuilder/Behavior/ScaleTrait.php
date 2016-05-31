<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

trait ScaleTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int $scale
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#scale
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
