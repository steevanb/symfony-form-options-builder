<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Disabled
{
    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#disabled
     */
    public function setDisabled($disabled = true)
    {
        $this->parameters['disabled'] = $disabled;

        return $this;
    }
}
