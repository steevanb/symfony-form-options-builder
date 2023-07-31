<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait ByReferenceTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    public function setByReference(bool $byReference = true): static
    {
        return $this->setOption('by_reference', $byReference);
    }

    public function getByReference(): ?bool
    {
        return $this->getOption('by_reference');
    }

    public function removeByReference(): static
    {
        return $this->removeOption('by_reference');
    }
}
