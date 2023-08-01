<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait GroupingTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    public function setGrouping(bool $grouping): static
    {
        return $this->setOption('grouping', $grouping);
    }

    public function getGrouping(): ?bool
    {
        return $this->getOption('grouping');
    }

    public function removeGrouping(): static
    {
        return $this->removeOption('grouping');
    }
}
