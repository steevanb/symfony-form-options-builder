<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait DateTimeCommonTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    /** @param string|array<string, string> $placeholder */
    public function setPlaceHolder(string|array $placeholder): static
    {
        return $this->setOption('placeholder', $placeholder);
    }

    /** @return string|array<string, string>|null */
    public function getPlaceHolder(): string|array|null
    {
        return $this->getOption('placeholder');
    }

    public function removePlaceholder(): static
    {
        return $this->removeOption('placeholder');
    }

    public function setInput(string $input): static
    {
        return $this->setOption('input', $input);
    }

    public function getInput(): ?string
    {
        return $this->getOption('input');
    }

    public function removeInput(): static
    {
        return $this->removeOption('input');
    }

    public function setModelTimezone(string $timezone): static
    {
        return $this->setOption('model_timezone', $timezone);
    }

    public function getModelTimezone(): ?string
    {
        return $this->getOption('model_timezone');
    }

    public function removeModelTimezone(): static
    {
        return $this->removeOption('model_timezone');
    }

    public function setViewTimezone(string $viewTimezone): static
    {
        return $this->setOption('view_timezone', $viewTimezone);
    }

    public function getViewTimezone(): ?string
    {
        return $this->getOption('view_timezone');
    }

    public function removeViewTimezone(): static
    {
        return $this->removeOption('view_timezone');
    }

    public function setWidget(string $widget): static
    {
        return $this->setOption('widget', $widget);
    }

    public function getWidget(): ?string
    {
        return $this->getOption('widget');
    }

    public function removeWidget(): static
    {
        return $this->removeOption('widget');
    }
}
