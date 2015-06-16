<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Scale
{
    /**
     * @param int $scale
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#scale
     */
    public function setAttr($scale)
    {
        $this->parameters['scale'] = $scale;

        return $this;
    }
}
