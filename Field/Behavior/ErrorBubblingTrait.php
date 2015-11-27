<?php

namespace steevanb\FormUtils\Field\Behavior;

trait ErrorBubblingTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true)
    {
        return $this->setOption('error_bubbling', $errorBubbling);
    }

    /**
     * @return null|bool
     */
    public function getErrorBubbling()
    {
        return $this->getOption('error_bubbling');
    }
}
