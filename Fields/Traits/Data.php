<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Data
{
    use ParameterAccessors;

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data
     */
    public function setData($data)
    {
        return $this->setParameter('data', $data);
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->getParameter('data');
    }
}
