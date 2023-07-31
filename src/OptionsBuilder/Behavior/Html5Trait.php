<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait Html5Trait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    public function setHtml5(bool $html5 = true): static
    {
        return $this->setOption('html5', $html5);
    }

    public function getHtml5(): ?bool
    {
        return $this->getOption('html5');
    }

    public function removeHtml5(): static
    {
        return $this->removeOption('html5');
    }
}
