<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait LabelTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $label
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label
     */
    public function setLabel($label)
    {
        return $this->setOption('label', $label);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label
     */
    public function getLabel()
    {
        return $this->getOption('label');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label
     */
    public function removeLabel()
    {
        return $this->removeOption('label');
    }
}
