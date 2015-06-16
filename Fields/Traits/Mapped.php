<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Mapped
{
    /**
     * @param boolean $mapped
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#mapped
     */
    public function setMapped($mapped)
    {
        $this->parameters['mapped'] = $mapped;

        return $this;
    }
}
