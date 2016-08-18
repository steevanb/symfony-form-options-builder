<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait GroupingTrait
{
    use OptionAccessorsTrait;

    /**
     * @param false|int $grouping
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/integer.html#grouping
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
