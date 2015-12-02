<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait MaxLengthTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int|null $maxLength
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#max-length
     * @deprecated Since 2.5
     */
    public function setMaxLength($maxLength)
    {
        return $this->setOption('max_length', $maxLength);
    }

    /**
     * @return int
     * @deprecated Since 2.5
     */
    public function getMaxLength()
    {
        return $this->getOption('max_length');
    }
}
