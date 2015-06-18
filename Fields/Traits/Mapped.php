<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Mapped
{
    /**
     * @param bool $mapped
     * @return $this
     */
    public function setMapped($mapped = true)
    {
        return $this->setParameter('mapped', boolval($mapped));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getMapped($default = true)
    {
        return $this->getParameter('mapped', $default);
    }
}
