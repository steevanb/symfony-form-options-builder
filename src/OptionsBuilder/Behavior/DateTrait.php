<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait DateTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    abstract public function setWidget(string $widget): static;

    abstract public function getWidget(): ?string;

    /** @param array<int> $days */
    public function setDays(array $days): static
    {
        return $this->setOption('days', $days);
    }

    /** @return array<int>|null */
    public function getDays(): ?array
    {
        return $this->getOption('days');
    }

    public function removeDays(): static
    {
        return $this->removeOption('days');
    }

    public function setFormat(string $format): static
    {
        return $this->setOption('format', $format);
    }

    public function getFormat(): ?string
    {
        return $this->getOption('format');
    }

    public function removeFormat(): static
    {
        return $this->removeOption('format');
    }

    /** @param array<int> $months */
    public function setMonths(array $months): static
    {
        return $this->setOption('months', $months);
    }

    /** @return array<int>|null */
    public function getMonths(): ?array
    {
        return $this->getOption('months');
    }

    public function removeMonths(): static
    {
        return $this->removeOption('months');
    }

    /** @param array<int> $years */
    public function setYears(array $years): static
    {
        return $this->setOption('years', $years);
    }

    /** @return array<int>|null */
    public function getYears(): ?array
    {
        return $this->getOption('years');
    }

    public function removeYears(): static
    {
        return $this->removeOption('years');
    }
}
