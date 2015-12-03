<?php

namespace steevanb\FormUtils\Behavior;

trait DataClassTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $class
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data-class
     */
    public function setDataClass($class)
    {
        return $this->setOption('data_class', $class);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data-class
     */
    public function getDataClass()
    {
        return $this->getOption('data_class');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data-class
     */
    public function removeDataClass()
    {
        return $this->removeOption('data_class');
    }
}
