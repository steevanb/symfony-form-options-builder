<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait DataTrait
{
    use OptionAccessorsTrait;

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data
     */
    public function setData($data)
    {
        return $this->setOption('data', $data);
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->getOption('data');
    }
}
