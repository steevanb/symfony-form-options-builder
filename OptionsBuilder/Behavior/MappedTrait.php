<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait MappedTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $mapped
     * @return $this
     */
    public function setMapped($mapped = true)
    {
        return $this->setOption('mapped', boolval($mapped));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getMapped($default = true)
    {
        return $this->getOption('mapped', $default);
    }
}
