<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Scale
{
    /**
     * @param int $scale
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#scale
     */
    public function setScale($scale)
    {
        $this->setParameter('scale', $scale);
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
        $this->setParameter('precision', $precision);
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
