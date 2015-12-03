<?php

namespace steevanb\FormUtils\Behavior;

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
        return $this->setOption('by_reference', $byReference);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#by-reference
     */
    public function getByReference()
    {
        return $this->getOption('by_reference');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#by-reference
     */
    public function removeByReference()
    {
        return $this->removeOption('by_reference');
    }
}
