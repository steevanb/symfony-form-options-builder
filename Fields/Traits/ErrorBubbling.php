<?php

namespace steevanb\FormUtils\Fields\Traits;

trait ErrorBubbling
{
    use ParameterAccessors;

    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true)
    {
        return $this->setParameter('error_bubbling', $errorBubbling);
    }

    /**
     * @return null|bool
     */
    public function getErrorBubbling()
    {
        return $this->getParameter('error_bubbling');
    }
}
