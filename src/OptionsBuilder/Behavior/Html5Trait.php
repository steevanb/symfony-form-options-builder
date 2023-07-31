<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait Html5Trait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/date.html#html5
     */
    public function setHtml5(bool $html5 = true): OptionsBuilderInterface
    {
        return $this->setOption('html5', $html5);
    }

    public function getHtml5(): ?bool
    {
        return $this->getOption('html5');
    }

    /** @return $this */
    public function removeHtml5(): OptionsBuilderInterface
    {
        return $this->removeOption('html5');
    }
}
