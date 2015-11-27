<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait ScaleTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int $scale
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#scale
     */
    public function setScale($scale)
    {
        return $this->setOption('scale', $scale);
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return $this->getOption('scale');
    }

    /**
     * @param int $precision
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#precision
     * @deprecated Since 2.7
     */
    public function setPrecision($precision)
    {
        return $this->setOption('precision', $precision);
    }

    /**
     * @return int
     * @deprecated Since 2.7
     */
    public function getPrecision()
    {
        return $this->getOption('precision');
    }
}
