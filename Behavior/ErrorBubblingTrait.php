<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait ErrorBubblingTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true)
    {
        return $this->setOption('error_bubbling', $errorBubbling);
    }

    /**
     * @return bool|string
     */
    public function getErrorBubbling()
    {
        return $this->getOption('error_bubbling');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-bubbling
     */
    public function removeErrorBubbling()
    {
        return $this->removeOption('error_bubbling');
    }
}
