<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ByReferenceTrait,
    OptionsBuilder\Behavior\OptionsBuilderInterface
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

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#allow-add
     */
    public function setAllowAdd(bool $allow = true): OptionsBuilderInterface
    {
        return $this->setOption('allow_add', $allow);
    }

    public function getAllowAdd(): ?bool
    {
        return $this->getOption('allow_add');
    }

    /** @return $this */
    public function removeAllowAdd(): OptionsBuilderInterface
    {
        return $this->removeOption('allow_add');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#allow-delete
     */
    public function setAllowDelete(bool $allow = true): OptionsBuilderInterface
    {
        return $this->setOption('allow_delete', $allow);
    }

    public function getAllowDelete(): ?bool
    {
        return $this->getOption('allow_delete');
    }

    /** @return $this */
    public function removeAllowDelete(): OptionsBuilderInterface
    {
        return $this->removeOption('allow_delete');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#delete-empty
     */
    public function setDeleteEmpty(bool $delete = true): OptionsBuilderInterface
    {
        return $this->setOption('delete_empty', $delete);
    }

    public function getDeleteEmpty(): ?bool
    {
        return $this->getOption('delete_empty');
    }

    /** @return $this */
    public function removeDeleteEmpty(): OptionsBuilderInterface
    {
        return $this->removeOption('delete_empty');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#prototype
     */
    public function setPrototype(bool $prototype = true): OptionsBuilderInterface
    {
        return $this->setOption('prototype', $prototype);
    }

    public function getPrototype(): ?bool
    {
        return $this->getOption('prototype');
    }

    /** @return $this */
    public function removePrototype(): OptionsBuilderInterface
    {
        return $this->removeOption('prototype');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#prototype-name
     */
    public function setPrototypeName(string $name): OptionsBuilderInterface
    {
        return $this->setOption('prototype_name', $name);
    }

    public function getPrototypeName(): ?string
    {
        return $this->getOption('prototype_name');
    }

    /** @return $this */
    public function removePrototypeName(): OptionsBuilderInterface
    {
        return $this->removeOption('prototype_name');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-type
     */
    public function setEntryType(FormTypeInterface $type): OptionsBuilderInterface
    {
        return $this->setOption('entry_type', $type);
    }

    /** @return $this */
    public function setEntryTypeClassname(string $type): OptionsBuilderInterface
    {
        return $this->setOption('entry_type', $type);
    }

    /** @return string|FormTypeInterface */
    public function getEntryType()
    {
        return $this->getOption('entry_type');
    }

    /** @return $this */
    public function removeEntryType(): OptionsBuilderInterface
    {
        return $this->removeOption('entry_type');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-options
     */
    public function setEntryOptions(array $options): OptionsBuilderInterface
    {
        return $this->setOption('entry_options', $options);
    }

    public function getEntryOptions(): ?array
    {
        return $this->getOption('entry_options');
    }

    /** @return $this */
    public function removeEntryOotions(): OptionsBuilderInterface
    {
        return $this->removeOption('entry_options');
    }
}
