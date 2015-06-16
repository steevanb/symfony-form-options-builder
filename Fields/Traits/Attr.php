<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Attr
{
    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/textarea.html#attr
     */
    public function setAttr(array $attr)
    {
        $this->parameters['attr'] = $attr;

        return $this;
    }
}
