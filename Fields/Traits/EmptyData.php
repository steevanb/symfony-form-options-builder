<?php

namespace steevanb\FormUtils\Fields\Traits;

trait EmptyData
{
    /**
     * @param mixed $emptyData
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#empty-data
     */
    public function setEmptyData($emptyData)
    {
        $this->parameters['empty_data'] = $emptyData;

        return $this;
    }
}
