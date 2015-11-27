<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait GroupingTrait
{
    use OptionAccessorsTrait;

    /**
     * @param false|int $grouping
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#grouping
     */
    public function setGrouping($grouping)
    {
        return $this->setOption('grouping', $grouping);
    }

    /**
     * @param null|bool $default
     * @return false|int
     */
    public function getGrouping($default = false)
    {
        return $this->getOption('grouping', $default);
    }
}
