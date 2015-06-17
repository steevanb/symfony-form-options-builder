<?php

namespace steevanb\FormUtils\Fields\Traits;

trait DataClass
{
    /**
     * @param string $dataClass
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data-class
     */
    public function setDataClass($dataClass)
    {
        return $this->setParameter('data_class', $dataClass);
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return $this->getParameter('data_class');
    }
}
