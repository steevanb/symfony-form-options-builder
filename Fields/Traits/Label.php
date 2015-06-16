<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Label
{
    /**
     * @param string $label
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#label
     */
    public function setLabel($label)
    {
        $this->parameters['label'] = $label;

        return $this;
    }
}
