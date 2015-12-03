<?php

namespace steevanb\FormUtils\Behavior;

trait TrimTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $trim
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#trim
     */
    public function setTrim($trim = true)
    {
        return $this->setOption('trim', $trim);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#trim
     */
    public function getTrim()
    {
        return $this->getOption('trim');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#trim
     */
    public function removeTrim()
    {
        return $this->removeOption('trim');
    }
}
