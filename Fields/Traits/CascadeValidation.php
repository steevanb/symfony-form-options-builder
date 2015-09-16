<?php

namespace steevanb\FormUtils\Fields\Traits;

trait CascadeValidation
{
    use ParameterAccessors;

    /**
     * @param $validation
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#cascade-validation
     */
    public function setCascadeValidation($validation = true)
    {
        return $this->setParameter('cascade_validation', boolval($validation));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getCascadeValidation($default = false)
    {
        return $this->getParameter('cascade_validation', $default);
    }
}
