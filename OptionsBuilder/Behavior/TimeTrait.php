<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait TimeTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/time.html#hours
     */
    public function setHours(array $hours): OptionsBuilderInterface
    {
        return $this->setOption('hours', $hours);
    }

    public function getHours(): ?array
    {
        return $this->getOption('hours');
    }

    /** @return $this */
    public function removeHours(): OptionsBuilderInterface
    {
        return $this->removeOption('hours');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/time.html#minutes
     */
    public function setMinutes(array $minutes): OptionsBuilderInterface
    {
        return $this->setOption('minutes', $minutes);
    }

    public function getMinutes(): ?array
    {
        return $this->getOption('minutes');
    }

    /** @return $this */
    public function removeMinutes(): OptionsBuilderInterface
    {
        return $this->removeOption('minutes');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/time.html#seconds
     */
    public function setSeconds(array $seconds): OptionsBuilderInterface
    {
        return $this->setOption('seconds', $seconds);
    }

    public function getSeconds(): ?array
    {
        return $this->getOption('seconds');
    }

    /** @return $this */
    public function removeSeconds(): OptionsBuilderInterface
    {
        return $this->removeOption('seconds');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/time.html#with-minutes
     */
    public function setWithMinutes(bool $withMinutes = true): OptionsBuilderInterface
    {
        return $this->setOption('with_minutes', $withMinutes);
    }

    public function getWithMinutes(): ?bool
    {
        return $this->getOption('with_minutes');
    }

    /** @return $this */
    public function removeWithMinutes(): OptionsBuilderInterface
    {
        return $this->removeOption('with_minutes');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/time.html#with-seconds
     */
    public function setWithSeconds(bool $withSeconds = true): OptionsBuilderInterface
    {
        return $this->setOption('with_seconds', $withSeconds);
    }

    public function getWithSeconds(): ?bool
    {
        return $this->getOption('with_seconds');
    }

    /** @return $this */
    public function removeWithSeconds(): OptionsBuilderInterface
    {
        return $this->removeOption('with_seconds');
    }
}
