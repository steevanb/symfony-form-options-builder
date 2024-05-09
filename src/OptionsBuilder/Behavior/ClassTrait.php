<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait ClassTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @param class-string $class
     * @return $this
     */
    public function setClass(string $class): OptionsBuilderInterface
    {
        return $this->setOption('class', $class);
    }

    /** @return class-string|null */
    public function getClass(): ?string
    {
        /** @var class-string|null $return */
        $return = $this->getOption('class');

        return $return;
    }

    /** @return $this */
    public function removeClass(): OptionsBuilderInterface
    {
        return $this->removeOption('class');
    }
}
