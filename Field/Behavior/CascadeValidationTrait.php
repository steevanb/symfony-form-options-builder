<?php

namespace steevanb\FormUtils\Field\Behavior;

trait CascadeValidationTrait
{
    use OptionAccessorsTrait;

    /**
     * @param $validation
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#cascade-validation
     */
    public function setCascadeValidation($validation = true)
    {
        return $this->setOption('cascade_validation', boolval($validation));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getCascadeValidation($default = false)
    {
        return $this->getOption('cascade_validation', $default);
    }
}
