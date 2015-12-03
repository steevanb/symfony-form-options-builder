<?php

namespace steevanb\FormUtils\Behavior;

trait CascadeValidationTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $cascade
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#cascade-validation
     * @deprecated Since 2.8
     */
    public function setCascadeValidation($cascade = true)
    {
        return $this->setOption('cascade_validation', $cascade);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#cascade-validation
     * @deprecated Since 2.8
     */
    public function getCascadeValidation()
    {
        return $this->getOption('cascade_validation');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#cascade-validation
     * @deprecated Since 2.8
     */
    public function removeCascadeValidation()
    {
        return $this->removeOption('cascade_validation');
    }
}
