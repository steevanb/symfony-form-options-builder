<?php

namespace steevanb\FormUtils\Behavior;

trait DisabledTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function setDisabled($disabled = true)
    {
        return $this->setOption('disabled', $disabled);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function getDisabled()
    {
        return $this->getOption('disabled');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function removeDisabled()
    {
        return $this->removeOption('disabled');
    }
}
