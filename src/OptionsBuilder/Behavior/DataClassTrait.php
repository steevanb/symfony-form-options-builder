<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait DataClassTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    public function setDataClass(string $class): static
    {
        return $this->setOption('data_class', $class);
    }

    public function getDataClass(): ?string
    {
        return $this->getOption('data_class');
    }

    public function removeDataClass(): static
    {
        return $this->removeOption('data_class');
    }
}
