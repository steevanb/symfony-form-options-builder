<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait ScaleTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    public function setScale(int $scale): static
    {
        return $this->setOption('scale', $scale);
    }

    public function getScale(): ?int
    {
        return $this->getOption('scale');
    }

    public function removeScale(): static
    {
        return $this->removeOption('scale');
    }
}
