<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;
use Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface;

trait ChoiceTypeTrait
{
    use OptionAccessorsTrait;
    use PlaceHolderTrait;

    /**
     * @param array $choices Format : [$label=>$value, $label2=>$value2]
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choices
     */
    public function setChoices(array $choices)
    {
        return $this->setOption('choices', $choices);
    }

    /**
     * @return array
     */
    public function getChoices()
    {
        return $this->getOption('choices');
    }

    /**
     * Replacement for removed choice_as_values config
     *
     * @param array $choices Format : [$value1=>$label1, $value2=>$label2]
     * @return $this
     */
    public function setFlippedChoices(array $choices)
    {
        $this->setChoices(array_keys($choices));

        return $this->setChoiceLabel(function($value) use ($choices) {
            return $choices[$value];
        });
    }

    /**
     * @param string|callable|null $label
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-label
     */
    public function setChoiceLabel($label)
    {
        return $this->setOption('choice_label', $label);
    }

    /**
     * @return string|callable|null
     */
    public function getChoiceLabel()
    {
        return $this->getOption('choice_label');
    }

    /**
     * @param string|false $domain
     * @return $this
     */
    public function setChoiceTranslationDomain($domain)
    {
        return $this->setOption('choice_translation_domain', $domain);
    }

    /**
     * @return string|false
     */
    public function getChoiceTranslationDomain()
    {
        return $this->getOption('choice_translation_domain');
    }

    /**
     * @param ChoiceLoaderInterface $loader
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-loader
     */
    public function setChoiceLoader(ChoiceLoaderInterface $loader)
    {
        return $this->setOption('choice_loader', $loader);
    }

    /**
     * @return ChoiceLoaderInterface|null
     */
    public function getChoiceLoader()
    {
        return $this->getOption('choice_loader');
    }

    /**
     * @return $this
     */
    public function setChoiceLabelNotTranslatable()
    {
        return $this->setChoiceTranslationDomain(false);
    }

    /**
     * @param mixed $name
     * @return $this
     * @link http://symfony.com/blog/new-in-symfony-2-7-choice-form-type-refactorization
     */
    public function setChoiceName($name)
    {
        return $this->setOption('choice_name', $name);
    }

    /**
     * @return mixed
     */
    public function getChoiceName()
    {
        return $this->getOption('choice_name');
    }

    /**
     * @param mixed $value
     * @return $this
     * @link http://symfony.com/blog/new-in-symfony-2-7-choice-form-type-refactorization
     */
    public function setChoiceValue($value)
    {
        return $this->setOption('choice_value', $value);
    }

    /**
     * @return mixed
     */
    public function getChoiceValue()
    {
        return $this->getOption('choice_value');
    }

    /**
     * @param string|callable|array|null $attr
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#choice-attr
     */
    public function setChoiceAttr($attr)
    {
        return $this->setOption('choice_attr', $attr);
    }

    /**
     * @return string|callable|array|null
     */
    public function getChoiceAttr()
    {
        return $this->getOption('choice_attr');
    }

    /**
     * @param mixed $groupBy
     * @return $this
     * @link http://symfony.com/blog/new-in-symfony-2-7-choice-form-type-refactorization
     */
    public function setGroupBy($groupBy)
    {
        return $this->setOption('group_by', $groupBy);
    }

    /**
     * @return mixed
     */
    public function getGroupBy()
    {
        return $this->getOption('group_by');
    }

    /**
     * @param bool $expanded
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#expanded
     */
    public function setExpanded($expanded = true)
    {
        return $this->setOption('expanded', $expanded);
    }

    /**
     * @return bool
     */
    public function getExpanded()
    {
        return $this->getOption('expanded');
    }

    /**
     * @param bool $multiple
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#multiple
     */
    public function setMultiple($multiple = true)
    {
        return $this->setOption('multiple', $multiple);
    }

    /**
     * @return bool
     */
    public function getMultiple()
    {
        return $this->getOption('multiple');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asMultipleSelect()
    {
        return $this->setMultiple()->setExpanded(false);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asSelect()
    {
        return $this->setMultiple(false)->setExpanded(false);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asRadioButtons()
    {
        return $this->setMultiple(false)->setExpanded();
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#select-tag-checkboxes-or-radio-buttons
     */
    public function asCheckboxes()
    {
        return $this->setMultiple()->setExpanded();
    }

    /**
     * @param string|callable|array $choices
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/choice.html#preferred-choices
     */
    public function setPreferredChoices(array $choices)
    {
        return $this->setOption('preferred_choices', $choices);
    }

    /**
     * @return string|callable|array
     */
    public function getPreferredChoices()
    {
        return $this->getOption('preferred_choices');
    }

    /**
     * @param bool $inChoices
     * @return $this
     */
    public function setPlaceholderInChoices($inChoices)
    {
        return $this->setOption('placeholder_in_choices', $inChoices);
    }

    /**
     * @return bool
     */
    public function getPlaceholderInChoices()
    {
        return $this->getOption('placeholder_in_choices');
    }
}
