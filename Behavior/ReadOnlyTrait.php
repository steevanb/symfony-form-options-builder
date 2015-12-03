<?php

namespace steevanb\FormUtils\Behavior;

trait ReadOnlyTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool|string $readOnly
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#read-only
     * @deprecated Since 2.8
     */
    public function setReadOnly($readOnly = true)
    {
        return $this->setOption('read_only', $readOnly);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#read-only
     * @deprecated Since 2.8
     */
    public function getReadOnly()
    {
        return $this->getOption('read_only');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#read-only
     * @deprecated Since 2.8
     */
    public function removeReadOnly()
    {
        return $this->removeOption('read_only');
    }
}
