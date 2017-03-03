<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait DataClassTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data-class
     */
    public function setDataClass(string $class): OptionsBuilderInterface
    {
        return $this->setOption('data_class', $class);
    }

    public function getDataClass(): ?string
    {
        return $this->getOption('data_class');
    }

    /** @return $this */
    public function removeDataClass(): OptionsBuilderInterface
    {
        return $this->removeOption('data_class');
    }
}
