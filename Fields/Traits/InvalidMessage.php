<?php

namespace steevanb\FormUtils\Fields\Traits;

trait InvalidMessage
{
    /**
     * @param string $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#invalid-message
     */
    public function setInvalidMessage($message)
    {
        $this->parameters['invalid_message'] = $message;

        return $this;
    }
}
