<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait RoundingModeTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    public function setRoundingMode(int $roundingMode): static
    {
        return $this->setOption('rounding_mode', $roundingMode);
    }

    public function getRoundingMode(): ?int
    {
        return $this->getOption('rounding_mode');
    }

    public function removeRoundingMode(): static
    {
        return $this->removeOption('rounding_mode');
    }
}
