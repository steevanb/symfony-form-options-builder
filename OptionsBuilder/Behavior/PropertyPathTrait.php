<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait PropertyPathTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $path
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath($path)
    {
        return $this->setOption('property_path', $path);
    }

    /**
     * @return string
     */
    public function getPropertyPath()
    {
        return $this->getOption('property_path');
    }
}
