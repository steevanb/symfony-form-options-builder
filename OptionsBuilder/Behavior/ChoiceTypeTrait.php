<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface;

trait ChoiceTypeTrait
{
    abstract public function setOption(string $name, $value): OptionsBuilderInterface;

    abstract public function getOption(string $name);

    abstract public function removeOption(string $name): OptionsBuilderInterface;

    /**
     * @param array $choices [$label=>$value, $label2=>$value2]
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choices
     */
    public function setChoices(array $choices): OptionsBuilderInterface
    {
        return $this->setOption('choices', $choices);
    }

    public function getChoices(): ?array
    {
        return $this->getOption('choices');
    }

    /** @return $this */
    public function removeChoices(): OptionsBuilderInterface
    {
        return $this->removeOption('choices');
    }

    /**
     * Replacement for removed choice_as_values config
     * @param array $choices [$value1=>$label1, $value2=>$label2]
     * @return $this
     */
    public function setFlippedChoices(array $choices): OptionsBuilderInterface
    {
        $this->setChoices(array_keys($choices));

        return $this->setChoiceLabelCallable(function($value) use ($choices) {
            return $choices[$value];
        });
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-label
     */
    public function setChoiceLabel(string $label): OptionsBuilderInterface
    {
        return $this->setOption('choice_label', $label);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-label
     */
    public function setChoiceLabelCallable(callable $callable): OptionsBuilderInterface
    {
        return $this->setOption('choice_label', $callable);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-label
     */
    public function disableChoiceLabel()
    {
        return $this->setOption('choice_label', false);
    }

    /** @return string|callable|null */
    public function getChoiceLabel()
    {
        return $this->getOption('choice_label');
    }

    /** @return $this */
    public function removeChoiceLabel(): OptionsBuilderInterface
    {
        return $this->removeOption('choice_label');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#choice-translation-domain
     */
    public function setChoiceTranslationDomain(string $domain): OptionsBuilderInterface
    {
        return $this->setOption('choice_translation_domain', $domain);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#choice-translation-domain
     */
    public function disableChoiceTranslationDomain()
    {
        return $this->setOption('choice_translation_domain', false);
    }

    /** @return string|false|null */
    public function getChoiceTranslationDomain()
    {
        return $this->getOption('choice_translation_domain');
    }

    /** @return $this */
    public function removeChoiceTranslationDomain(): OptionsBuilderInterface
    {
        return $this->removeOption('choice_translation_domain');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-loader
     */
    public function setChoiceLoader(ChoiceLoaderInterface $loader): OptionsBuilderInterface
    {
        return $this->setOption('choice_loader', $loader);
    }

    public function getChoiceLoader(): ?ChoiceLoaderInterface
    {
        return $this->getOption('choice_loader');
    }

    /** @return $this */
    public function removeChoiceLoader(): OptionsBuilderInterface
    {
        return $this->removeOption('choice_loader');
    }

    /**
     * @param callable|string $name
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-name
     */
    public function setChoiceName($name): OptionsBuilderInterface
    {
        return $this->setOption('choice_name', $name);
    }

    /** @return callable|string|null */
    public function getChoiceName()
    {
        return $this->getOption('choice_name');
    }

    /** @return $this */
    public function removeChoiceName(): OptionsBuilderInterface
    {
        return $this->removeOption('choice_name');
    }

    /**
     * @param callable|string $value
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-value
     */
    public function setChoiceValue($value): OptionsBuilderInterface
    {
        return $this->setOption('choice_value', $value);
    }

    /** @return callable|string|null */
    public function getChoiceValue()
    {
        return $this->getOption('choice_value');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-attr
     */
    public function setChoiceAttr(array $attr): OptionsBuilderInterface
    {
        return $this->setOption('choice_attr', $attr);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-attr
     */
    public function setChoiceAttrCallable(callable $callable): OptionsBuilderInterface
    {
        return $this->setOption('choice_attr', $callable);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-attr
     */
    public function setChoiceAttrForAll(string $attr): OptionsBuilderInterface
    {
        return $this->setOption('choice_attr', $attr);
    }

    /** @return string|callable|array|null */
    public function getChoiceAttr()
    {
        return $this->getOption('choice_attr');
    }

    /** @return $this */
    public function removeChoiceAttr(): OptionsBuilderInterface
    {
        return $this->removeOption('choice_attr');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#group-by
     */
    public function setGroupBy(string $groupBy): OptionsBuilderInterface
    {
        return $this->setOption('group_by', $groupBy);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#group-by
     */
    public function setGroupByArray(array $groupBy): OptionsBuilderInterface
    {
        return $this->setOption('group_by', $groupBy);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#group-by
     */
    public function setGroupByCallable(callable $groupBy): OptionsBuilderInterface
    {
        return $this->setOption('group_by', $groupBy);
    }

    /** @return string|callable|array|null */
    public function getGroupBy()
    {
        return $this->getOption('group_by');
    }

    /** @return $this */
    public function removeGroupBy(): OptionsBuilderInterface
    {
        return $this->removeOption('gruop_by');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#expanded
     */
    public function setExpanded(bool $expanded = true): OptionsBuilderInterface
    {
        return $this->setOption('expanded', $expanded);
    }

    public function getExpanded(): ?bool
    {
        return $this->getOption('expanded');
    }

    /** @return $this */
    public function removeExpanded(): OptionsBuilderInterface
    {
        return $this->removeOption('expanded');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#multiple
     */
    public function setMultiple(bool $multiple = true): OptionsBuilderInterface
    {
        return $this->setOption('multiple', $multiple);
    }

    public function getMultiple(): ?bool
    {
        return $this->getOption('multiple');
    }

    /** @return $this */
    public function removeMultiple(): OptionsBuilderInterface
    {
        return $this->removeOption('multiple');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asMultipleSelect(): OptionsBuilderInterface
    {
        return $this->setMultiple()->setExpanded(false);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asSelect(): OptionsBuilderInterface
    {
        return $this->setMultiple(false)->setExpanded(false);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asRadioButtons(): OptionsBuilderInterface
    {
        return $this->setMultiple(false)->setExpanded();
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asCheckboxes(): OptionsBuilderInterface
    {
        return $this->setMultiple()->setExpanded();
    }

    /**
     * @param string|callable|array $choices
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#preferred-choices
     */
    public function setPreferredChoices(array $choices): OptionsBuilderInterface
    {
        return $this->setOption('preferred_choices', $choices);
    }

    /** @return string|callable|array|null */
    public function getPreferredChoices()
    {
        return $this->getOption('preferred_choices');
    }

    /** @return $this */
    public function removePreferredChoices(): OptionsBuilderInterface
    {
        return $this->removeOption('preferred_choices');
    }

    /**
     * @param string|false $placeholder
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#placeholder
     */
    public function setPlaceHolder($placeholder): OptionsBuilderInterface
    {
        return $this->setOption('placeholder', $placeholder);
    }

    /** @return string|false */
    public function getPlaceHolder()
    {
        return $this->getOption('placeholder');
    }

    /** @return $this */
    public function removePlaceholder(): OptionsBuilderInterface
    {
        return $this->removeOption('placeholder');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#field-variables
     */
    public function setPlaceholderInChoices(bool $inChoices): OptionsBuilderInterface
    {
        return $this->setOption('placeholder_in_choices', $inChoices);
    }

    public function getPlaceholderInChoices(): ?bool
    {
        return $this->getOption('placeholder_in_choices');
    }

    /** @return $this */
    public function removePlaceholderInChoices(): OptionsBuilderInterface
    {
        return $this->removeOption('placeholder_in_choices');
    }
}
