<?php

namespace steevanb\FormUtils\Fields\Traits;

trait RoundingMode
{
    /**
     * @param int $roudingMode
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#rounding-mode
     */
    public function setRoundingMode($roudingMode)
    {
        $this->parameters['rouding_mode'] = $roudingMode;

        return $this;
    }
}
