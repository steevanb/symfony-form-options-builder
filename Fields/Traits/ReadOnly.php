<?php

namespace steevanb\FormUtils\Fields\Traits;

trait ReadOnly
{
    /**
     * @param bool $readOnly
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#read-only
     */
    public function setReadOnly($readOnly = true)
    {
        $this->parameters['read_only'] = $readOnly;

        return $this;
    }
}
