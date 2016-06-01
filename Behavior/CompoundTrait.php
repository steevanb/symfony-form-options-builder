<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait CompoundTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $compound
     * @return bool
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#compound
     */
    public function setCompound($compound = true)
    {
        return $this->setOption('compound', $compound);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#compound
     */
    public function getCompound()
    {
        return $this->getOption('compound');
    }

    /**
     * @return bool
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#compound
     */
    public function removeCompound()
    {
        return $this->removeOption('compound');
    }
}
