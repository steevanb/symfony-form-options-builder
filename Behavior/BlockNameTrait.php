<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait BlockNameTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $name
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#block-name
     */
    public function setBlockName($name)
    {
        return $this->setOption('block_name', $name);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#block-name
     */
    public function getBlockName()
    {
        return $this->getOption('block_name');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#block-name
     */
    public function removeBlockName()
    {
        return $this->removeOption('block_name');
    }
}
