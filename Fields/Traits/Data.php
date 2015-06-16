<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Data
{
    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#data
     */
    public function setData($data)
    {
        $this->parameters['data'] = $data;

        return $this;
    }
}
