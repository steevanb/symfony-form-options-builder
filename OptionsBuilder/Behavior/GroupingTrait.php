<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

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
     * @return false|int
     */
    public function getGrouping()
    {
        return $this->getOption('grouping');
    }
}
