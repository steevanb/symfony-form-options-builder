<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait DateTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    abstract public function setWidget(string $widget): OptionsBuilderInterface;

    abstract public function getWidget(): ?string;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#days
     */
    public function setDays(array $days): OptionsBuilderInterface
    {
        return $this->setOption('days', $days);
    }

    public function getDays(): ?array
    {
        return $this->getOption('days');
    }

    /** @return $this */
    public function removeDays(): OptionsBuilderInterface
    {
        return $this->removeOption('days');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/date.html#format
     */
    public function setFormat(string $format): OptionsBuilderInterface
    {
        return $this->setOption('format', $format);
    }

    public function getFormat(): ?string
    {
        return $this->getOption('format');
    }

    /** @return $this */
    public function removeFormat(): OptionsBuilderInterface
    {
        return $this->removeOption('format');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#months
     */
    public function setMonths(array $months): OptionsBuilderInterface
    {
        return $this->setOption('months', $months);
    }

    public function getMonths(): array
    {
        return $this->getOption('months');
    }

    /** @return $this */
    public function removeMonths(): OptionsBuilderInterface
    {
        return $this->removeOption('months');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#years
     */
    public function setYears(array $years): OptionsBuilderInterface
    {
        return $this->setOption('years', $years);
    }

    public function getYears(): array
    {
        return $this->getOption('years');
    }

    /** @return $this */
    public function removeYears(): OptionsBuilderInterface
    {
        return $this->removeOption('years');
    }
}
