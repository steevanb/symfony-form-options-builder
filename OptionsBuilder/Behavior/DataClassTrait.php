<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait DataClassTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $dataClass
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data-class
     */
    public function setDataClass($dataClass)
    {
        return $this->setOption('data_class', $dataClass);
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return $this->getOption('data_class');
    }
}
