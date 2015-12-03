<?php

namespace steevanb\FormUtils\Behavior;

trait InvalidMessageTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message
     */
    public function setInvalidMessage($message)
    {
        return $this->setOption('invalid_message', $message);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message
     */
    public function getInvalidMessage()
    {
        return $this->getOption('invalid_message');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message
     */
    public function removeInvalidMessage()
    {
        return $this->removeOption('invalid_message');
    }
}
