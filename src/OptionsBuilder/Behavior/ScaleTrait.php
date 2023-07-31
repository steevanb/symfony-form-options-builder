<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait ScaleTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/integer.html#scale
     */
    public function setScale(int $scale): OptionsBuilderInterface
    {
        return $this->setOption('scale', $scale);
    }

    public function getScale(): ?int
    {
        return $this->getOption('scale');
    }

    /** @return $this */
    public function removeScale(): OptionsBuilderInterface
    {
        return $this->removeOption('scale');
    }
}
