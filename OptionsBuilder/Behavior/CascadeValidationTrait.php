<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait CascadeValidationTrait
{
    use OptionAccessorsTrait;

    /**
     * @param $validation
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#cascade-validation
     * @deprecated Since 2.8
     */
    public function setCascadeValidation($validation = true)
    {
        return $this->setOption('cascade_validation', $validation);
    }

    /**
     * @return bool
     * @deprecated Since 2.8
     */
    public function getCascadeValidation()
    {
        return $this->getOption('cascade_validation');
    }
}
