<?php

namespace steevanb\FormUtils\Fields\Traits;

trait PlaceHolder
{
    /**
     * @param false|string $placeholder
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#placeholder
     */
    public function setPlaceHolder($placeholder)
    {
        return $this->setParameter('placeholder', $placeholder);
    }

    /**
     * @return false|string
     */
    public function getPlaceHolder()
    {
        return $this->getParameter('placeholder');
    }
}