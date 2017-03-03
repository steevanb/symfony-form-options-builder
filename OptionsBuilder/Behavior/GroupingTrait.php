<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait GroupingTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @param int|false $grouping
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/integer.html#grouping
     */
    public function setGrouping($grouping): OptionsBuilderInterface
    {
        return $this->setOption('grouping', $grouping);
    }

    /** @return int|false|null */
    public function getGrouping()
    {
        return $this->getOption('grouping');
    }

    /** @return $this */
    public function removeGrouping(): OptionsBuilderInterface
    {
        return $this->removeOption('grouping');
    }
}
