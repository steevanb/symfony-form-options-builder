<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

trait RoundingModeTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int $roundingMode
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#rounding-mode
     */
    public function setRoundingMode($roundingMode)
    {
        return $this->setOption('rounding_mode', $roundingMode);
    }

    /**
     * @return int
     */
    public function getRoundingMode()
    {
        return $this->getOption('rounding_mode');
    }
}
