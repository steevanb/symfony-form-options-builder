<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

trait ByReferenceTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#by-reference
     */
    public function setByReference(bool $byReference = true): OptionsBuilderInterface
    {
        return $this->setOption('by_reference', $byReference);
    }

    public function getByReference(): ?bool
    {
        return $this->getOption('by_reference');
    }

    /** @return $this */
    public function removeByReference(): self
    {
        return $this->removeOption('by_reference');
    }
}
