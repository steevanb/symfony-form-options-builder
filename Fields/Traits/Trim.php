<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Trim
{
    /**
     * @param bool $trim
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#trim
     */
    public function setTrim($trim = true)
    {
        $this->parameters['trim'] = $trim;

        return $this;
    }
}
