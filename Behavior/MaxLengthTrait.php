<?php

namespace steevanb\FormUtils\Behavior;

trait MaxLengthTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int $max
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#max-length
     * @deprecated Since 2.5
     */
    public function setMaxLength($max)
    {
        return $this->setOption('max_length', $max);
    }

    /**
     * @return int|string
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#max-length
     * @deprecated Since 2.5
     */
    public function getMaxLength()
    {
        return $this->getOption('max_length');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#max-length
     * @deprecated Since 2.5
     */
    public function removeMaxLength()
    {
        return $this->removeOption('max_length');
    }
}
