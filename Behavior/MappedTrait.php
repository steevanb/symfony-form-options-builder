<?php

namespace steevanb\FormUtils\Behavior;

trait MappedTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool|string $mapped
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#mapped
     */
    public function setMapped($mapped = true)
    {
        return $this->setOption('mapped', $mapped);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#mapped
     */
    public function getMapped()
    {
        return $this->getOption('mapped');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#mapped
     */
    public function removeMapped()
    {
        return $this->removeOption('mapped');
    }
}
