<?php

namespace steevanb\FormUtils\Behavior;

trait RequiredTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $required
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#required
     */
    public function setRequired($required = true)
    {
        return $this->setOption('required', $required);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#required
     */
    public function getRequired()
    {
        return $this->getOption('required');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#required
     */
    public function removeRequired()
    {
        return $this->removeOption('required');
    }
}
