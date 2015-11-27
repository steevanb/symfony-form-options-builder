<?php

namespace steevanb\FormUtils\Field\Behavior;

trait ByReferenceTrait
{
    use ParameterAccessors;

    /**
     * @param bool $byReference
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#by-reference
     */
    public function setByReference($byReference = true)
    {
        return $this->setParameter('by_reference', boolval($byReference));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getByReference($default = true)
    {
        return $this->getParameter('by_reference', $default);
    }
}
