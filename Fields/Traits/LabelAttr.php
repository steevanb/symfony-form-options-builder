<?php

namespace steevanb\FormUtils\Fields\Traits;

trait LabelAttr
{
    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/text.html#label-attr
     */
    public function setLabelAttr(array $attr)
    {
        $this->parameters['label_attr'] = $attr;

        return $this;
    }
}
