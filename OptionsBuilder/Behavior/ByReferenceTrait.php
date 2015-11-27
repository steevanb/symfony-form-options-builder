<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait ByReferenceTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $byReference
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#by-reference
     */
    public function setByReference($byReference = true)
    {
        return $this->setOption('by_reference', boolval($byReference));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getByReference($default = true)
    {
        return $this->getOption('by_reference', $default);
    }
}
