<?php

namespace steevanb\FormUtils\Fields\Traits;

trait ErrorMapping
{
    /**
     * @param array $errorMapping
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#error-mapping
     */
    public function setErrorMapping(array $errorMapping)
    {
        $this->parameters['error_mapping'] = $errorMapping;

        return $this;
    }
}
