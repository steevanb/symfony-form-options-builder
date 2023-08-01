<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait TimeTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    /** @param array<int> $hours */
    public function setHours(array $hours): static
    {
        return $this->setOption('hours', $hours);
    }

    /** @return array<int>|null */
    public function getHours(): ?array
    {
        return $this->getOption('hours');
    }

    public function removeHours(): static
    {
        return $this->removeOption('hours');
    }

    /** @param array<int> $minutes */
    public function setMinutes(array $minutes): static
    {
        return $this->setOption('minutes', $minutes);
    }

    /** @return array<int>|null */
    public function getMinutes(): ?array
    {
        return $this->getOption('minutes');
    }

    public function removeMinutes(): static
    {
        return $this->removeOption('minutes');
    }

    /** @param array<int> $seconds */
    public function setSeconds(array $seconds): static
    {
        return $this->setOption('seconds', $seconds);
    }

    /** @return array<int>|null */
    public function getSeconds(): ?array
    {
        return $this->getOption('seconds');
    }

    public function removeSeconds(): static
    {
        return $this->removeOption('seconds');
    }

    public function setWithMinutes(bool $withMinutes = true): static
    {
        return $this->setOption('with_minutes', $withMinutes);
    }

    public function getWithMinutes(): ?bool
    {
        return $this->getOption('with_minutes');
    }

    public function removeWithMinutes(): static
    {
        return $this->removeOption('with_minutes');
    }

    public function setWithSeconds(bool $withSeconds = true): static
    {
        return $this->setOption('with_seconds', $withSeconds);
    }

    public function getWithSeconds(): ?bool
    {
        return $this->getOption('with_seconds');
    }

    public function removeWithSeconds(): static
    {
        return $this->removeOption('with_seconds');
    }
}
