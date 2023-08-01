<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ByReferenceTrait
};
use Symfony\Component\Form\{
    Extension\Core\Type\CollectionType,
    FormTypeInterface
};

class CollectionOptionsBuilder extends AbstractOptionsBuilder
{
    use ByReferenceTrait;

    public static function getBuilderType(): string
    {
        return CollectionType::class;
    }

    public function setAllowAdd(bool $allow = true): static
    {
        return $this->setOption('allow_add', $allow);
    }

    public function getAllowAdd(): ?bool
    {
        return $this->getOption('allow_add');
    }

    public function removeAllowAdd(): static
    {
        return $this->removeOption('allow_add');
    }

    public function setAllowDelete(bool $allow = true): static
    {
        return $this->setOption('allow_delete', $allow);
    }

    public function getAllowDelete(): ?bool
    {
        return $this->getOption('allow_delete');
    }

    public function removeAllowDelete(): static
    {
        return $this->removeOption('allow_delete');
    }

    public function setDeleteEmpty(bool $delete = true): static
    {
        return $this->setOption('delete_empty', $delete);
    }

    public function getDeleteEmpty(): ?bool
    {
        return $this->getOption('delete_empty');
    }

    public function removeDeleteEmpty(): static
    {
        return $this->removeOption('delete_empty');
    }

    public function setPrototype(bool $prototype = true): static
    {
        return $this->setOption('prototype', $prototype);
    }

    public function getPrototype(): ?bool
    {
        return $this->getOption('prototype');
    }

    public function removePrototype(): static
    {
        return $this->removeOption('prototype');
    }

    public function setPrototypeName(string $name): static
    {
        return $this->setOption('prototype_name', $name);
    }

    public function getPrototypeName(): ?string
    {
        return $this->getOption('prototype_name');
    }

    public function removePrototypeName(): static
    {
        return $this->removeOption('prototype_name');
    }

    public function setEntryType(FormTypeInterface $type): static
    {
        return $this->setOption('entry_type', $type);
    }

    public function setEntryTypeClassname(string $type): static
    {
        return $this->setOption('entry_type', $type);
    }

    /** @return string|FormTypeInterface */
    public function getEntryType()
    {
        return $this->getOption('entry_type');
    }

    public function removeEntryType(): static
    {
        return $this->removeOption('entry_type');
    }

    /** @param array<mixed> $options */
    public function setEntryOptions(array $options): static
    {
        return $this->setOption('entry_options', $options);
    }

    /** @return array<mixed>|null */
    public function getEntryOptions(): ?array
    {
        return $this->getOption('entry_options');
    }

    public function removeEntryOptions(): static
    {
        return $this->removeOption('entry_options');
    }
}
