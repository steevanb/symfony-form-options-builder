<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface;
use Symfony\Component\PropertyAccess\PropertyPath;

trait ChoiceTypeTrait
{
    abstract public function setOption(string $name, $value): static;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): static;

    /** @param array<mixed> $choices */
    public function setChoices(array $choices): static
    {
        return $this->setOption('choices', $choices);
    }

    /** @return array<mixed>|null */
    public function getChoices(): ?array
    {
        return $this->getOption('choices');
    }

    public function removeChoices(): static
    {
        return $this->removeOption('choices');
    }

    public function setChoiceLabel(string|callable $label): static
    {
        return $this->setOption('choice_label', $label);
    }

    public function disableChoiceLabel(): static
    {
        return $this->setOption('choice_label', false);
    }

    public function getChoiceLabel(): string|callable|false|null
    {
        return $this->getOption('choice_label');
    }

    public function removeChoiceLabel(): static
    {
        return $this->removeOption('choice_label');
    }

    public function setChoiceTranslationDomain(string $domain): static
    {
        return $this->setOption('choice_translation_domain', $domain);
    }

    public function disableChoiceTranslationDomain(): static
    {
        return $this->setOption('choice_translation_domain', false);
    }

    public function getChoiceTranslationDomain(): string|false|null
    {
        return $this->getOption('choice_translation_domain');
    }

    public function removeChoiceTranslationDomain(): static
    {
        return $this->removeOption('choice_translation_domain');
    }

    public function setChoiceLoader(ChoiceLoaderInterface $loader): static
    {
        return $this->setOption('choice_loader', $loader);
    }

    public function getChoiceLoader(): ?ChoiceLoaderInterface
    {
        return $this->getOption('choice_loader');
    }

    public function removeChoiceLoader(): static
    {
        return $this->removeOption('choice_loader');
    }

    public function setChoiceName(string|callable $name): static
    {
        return $this->setOption('choice_name', $name);
    }

    public function getChoiceName(): string|callable|null
    {
        return $this->getOption('choice_name');
    }

    public function removeChoiceName(): static
    {
        return $this->removeOption('choice_name');
    }

    public function setChoiceValue(string|callable $value): static
    {
        return $this->setOption('choice_value', $value);
    }

    public function getChoiceValue(): string|callable|null
    {
        return $this->getOption('choice_value');
    }

    /** @param string|array<array<string, string>>|callable|PropertyPath $attr */
    public function setChoiceAttr(string|array|callable|PropertyPath $attr): static
    {
        return $this->setOption('choice_attr', $attr);
    }

    /** @return string|array<array<string, string>>|callable|PropertyPath|null */
    public function getChoiceAttr(): string|array|callable|PropertyPath|null
    {
        return $this->getOption('choice_attr');
    }

    public function removeChoiceAttr(): static
    {
        return $this->removeOption('choice_attr');
    }

    public function setGroupBy(string|callable|PropertyPath $groupBy): static
    {
        return $this->setOption('group_by', $groupBy);
    }

    public function getGroupBy(): string|callable|PropertyPath|null
    {
        return $this->getOption('group_by');
    }

    public function removeGroupBy(): static
    {
        return $this->removeOption('gruop_by');
    }

    public function setExpanded(bool $expanded = true): static
    {
        return $this->setOption('expanded', $expanded);
    }

    public function getExpanded(): ?bool
    {
        return $this->getOption('expanded');
    }

    public function removeExpanded(): static
    {
        return $this->removeOption('expanded');
    }

    public function setMultiple(bool $multiple = true): static
    {
        return $this->setOption('multiple', $multiple);
    }

    public function getMultiple(): ?bool
    {
        return $this->getOption('multiple');
    }

    public function removeMultiple(): static
    {
        return $this->removeOption('multiple');
    }

    public function asMultipleSelect(): static
    {
        return $this->setMultiple()->setExpanded(false);
    }

    public function asSelect(): static
    {
        return $this->setMultiple(false)->setExpanded(false);
    }

    public function asRadioButtons(): static
    {
        return $this->setMultiple(false)->setExpanded();
    }

    public function asCheckboxes(): static
    {
        return $this->setMultiple()->setExpanded();
    }

    /** @param string|callable|array<string|int>|PropertyPath $choices */
    public function setPreferredChoices(string|callable|array|PropertyPath $choices): static
    {
        return $this->setOption('preferred_choices', $choices);
    }

    /** @return string|callable|array<string|int>|PropertyPath|null */
    public function getPreferredChoices(): string|callable|array|PropertyPath|null
    {
        return $this->getOption('preferred_choices');
    }

    public function removePreferredChoices(): static
    {
        return $this->removeOption('preferred_choices');
    }

    public function setPlaceHolder(string $placeholder): static
    {
        return $this->setOption('placeholder', $placeholder);
    }

    public function getPlaceHolder(): string|false|null
    {
        return $this->getOption('placeholder');
    }

    public function disablePlaceHolder(): static
    {
        return $this->setOption('placeholder', false);
    }

    public function removePlaceholder(): static
    {
        return $this->removeOption('placeholder');
    }

    public function setPlaceholderInChoices(bool $inChoices): static
    {
        return $this->setOption('placeholder_in_choices', $inChoices);
    }

    public function getPlaceholderInChoices(): ?bool
    {
        return $this->getOption('placeholder_in_choices');
    }

    public function removePlaceholderInChoices(): static
    {
        return $this->removeOption('placeholder_in_choices');
    }
}
