<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Precision
{
    /**
     * @param int $precision
     * @return $this
     * @link http://symfony.com/doc/2.6/reference/forms/types/integer.html#precision
     */
    public function setPrecision($precision)
    {
        $this->parameters['precision'] = $precision;

        return $this;
    }
}
