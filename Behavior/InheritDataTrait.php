<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait InheritDataTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool|string $inherit
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#inherit-data
     */
    public function setInheritData($inherit = true)
    {
        return $this->setOption('inherit_data', $inherit);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#inherit-data
     */
    public function getInheritData()
    {
        return $this->getOption('inherit_data');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#inherit-data
     */
    public function removeInheritData()
    {
        return $this->removeOption('inherit_data');
    }
}
