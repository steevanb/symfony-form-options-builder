<?php

namespace steevanb\FormUtils\Fields\Traits;

trait InvalidMessageParameters
{
    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#invalid-message-parameters
     */
    public function setInvalidMessage(array $parameters)
    {
        $this->parameters['invalid_message_parameters'] = $parameters;

        return $this;
    }
}
