<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait DateTimeCommonTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @param string|array $placeholder
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#placeholder
     */
    public function setPlaceHolder($placeholder): OptionsBuilderInterface
    {
        return $this->setOption('placeholder', $placeholder);
    }

    /** @return string|array|null */
    public function getPlaceHolder()
    {
        return $this->getOption('placeholder');
    }

    /** @return $this */
    public function removePlaceholder(): OptionsBuilderInterface
    {
        return $this->removeOption('placeholder');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#input
     */
    public function setInput(string $input): OptionsBuilderInterface
    {
        return $this->setOption('input', $input);
    }

    public function getInput(): ?string
    {
        return $this->getOption('input');
    }

    /** @return $this */
    public function removeInput(): OptionsBuilderInterface
    {
        return $this->removeOption('input');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#model-timezone
     */
    public function setModelTimezone(string $timezone): OptionsBuilderInterface
    {
        return $this->setOption('model_timezone', $timezone);
    }

    public function getModelTimezone(): ?string
    {
        return $this->getOption('model_timezone');
    }

    /** @return $this */
    public function removeModelTimezone(): OptionsBuilderInterface
    {
        return $this->removeOption('model_timezone');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#view-timezone
     */
    public function setViewTimezone(string $viewTimezone): OptionsBuilderInterface
    {
        return $this->setOption('view_timezone', $viewTimezone);
    }

    public function getViewTimezone(): ?string
    {
        return $this->getOption('view_timezone');
    }

    /** @return $this */
    public function removeViewTimezone(): OptionsBuilderInterface
    {
        return $this->removeOption('view_timezone');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#widget
     */
    public function setWidget(string $widget): OptionsBuilderInterface
    {
        return $this->setOption('widget', $widget);
    }

    public function getWidget(): ?string
    {
        return $this->getOption('widget');
    }

    /** @return $this */
    public function removeWidget(): OptionsBuilderInterface
    {
        return $this->removeOption('widget');
    }
}
