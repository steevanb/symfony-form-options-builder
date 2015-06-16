<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Required
{
    /**
     * @param bool $required
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#required
     */
    public function setRequired($required = true)
    {
        $this->parameters['required'] = $required;

        return $this;
    }
}
