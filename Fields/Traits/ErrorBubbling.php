<?php

namespace steevanb\FormUtils\Fields\Traits;

trait ErrorBubbling
{
    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true)
    {
        $this->parameters['error_bubbling'] = $errorBubbling;

        return $this;
    }
}
