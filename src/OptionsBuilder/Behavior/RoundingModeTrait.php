<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait RoundingModeTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/integer.html#rounding-mode
     */
    public function setRoundingMode(int $roundingMode): OptionsBuilderInterface
    {
        return $this->setOption('rounding_mode', $roundingMode);
    }

    public function getRoundingMode(): ?int
    {
        return $this->getOption('rounding_mode');
    }

    /** @return $this */
    public function removeRoundingMode(): OptionsBuilderInterface
    {
        return $this->removeOption('rounding_mode');
    }
}
