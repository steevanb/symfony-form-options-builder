<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Scale
{
    use ParameterAccessors;

    /**
     * @param int $scale
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#scale
     */
    public function setScale($scale)
    {
        return $this->setParameter('scale', $scale);
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return $this->getParameter('scale');
    }

    /**
     * @param int $precision
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#precision
     * @deprecated Since 2.7
     */
    public function setPrecision($precision)
    {
        return $this->setParameter('precision', $precision);
    }

    /**
     * @return int
     * @deprecated Since 2.7
     */
    public function getPrecision()
    {
        return $this->getParameter('precision');
    }
}
