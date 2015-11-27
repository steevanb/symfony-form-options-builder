<?php

namespace steevanb\FormUtils\Field\Behavior;

trait AlwaysEmptyTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $alwaysEmpty
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/password.html#always-empty
     */
    public function setAlwaysEmpty($alwaysEmpty)
    {
        return $this->setOption('always_empty', $alwaysEmpty);
    }

    /**
     * @return int
     */
    public function getAlwaysEmpty()
    {
        return $this->getOption('always_empty', true);
    }
}
