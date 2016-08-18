<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait ExtraFieldsMessageTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#extra-fields-message
     */
    public function setExtraFieldsMessage($message)
    {
        return $this->setOption('extra_fields_message', $message);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#extra-fields-message
     */
    public function getExtraFieldsMessage()
    {
        return $this->getOption('extra_fields_message');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#extra-fields-message
     */
    public function removeExtraFieldsMessage()
    {
        return $this->removeOption('extra_fields_message');
    }
}
