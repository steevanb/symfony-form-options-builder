<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait LabelTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string|false $label
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function setLabel($label)
    {
        return $this->setOption('label', $label);
    }

    /**
     * @return string|false
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function getLabel()
    {
        return $this->getOption('label');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function removeLabel()
    {
        return $this->removeOption('label');
    }
}
