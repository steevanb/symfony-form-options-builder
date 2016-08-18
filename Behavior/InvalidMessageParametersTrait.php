<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait InvalidMessageParametersTrait
{
    use OptionAccessorsTrait;

    /**
     * @param array $parameters
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function setInvalidMessageParameters(array $parameters)
    {
        return $this->setOption('invalid_message_parameters', $parameters);
    }

    /**
     * @return array
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function getInvalidMessageParameters()
    {
        return $this->getOption('invalid_message_parameters');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function removeInvalidMessageParameters()
    {
        return $this->removeOption('invalid_message_parameters');
    }
}
