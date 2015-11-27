<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait ChoiceTypeTrait
{
    use FormTypeTrait;
    use PlaceHolderTrait;

    /**
     * @param array $choices
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#choices
     */
    public function setChoices(array $choices)
    {
        return $this->setOption('choices', $choices);
    }

    /**
     * @param null|array $default
     * @return array
     */
    public function getChoices($default = array())
    {
        return $this->getOption('choices', $default);
    }

    /**
     * @param mixed $label
     * @return $this
     * @link http://symfony.com/blog/new-in-symfony-2-7-choice-form-type-refactorization
     */
    public function setChoiceLabel($label)
    {
        return $this->setOption('choice_label', $label);
    }

    /**
     * @return mixed
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
     * @param mixed $attr
     * @return $this
     * @link http://symfony.com/blog/new-in-symfony-2-7-choice-form-type-refactorization
     */
    public function setChoiceAttr($attr)
    {
        return $this->setOption('choice_attr', $attr);
    }

    /**
     * @return mixed
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
     * @param bool $asValues
     * @return $this
     * @link http://symfony.com/blog/new-in-symfony-2-7-choice-form-type-refactorization
     */
    public function setChoicesAsValues($asValues = true)
    {
        return $this->setOption('choices_as_values', $asValues);
    }

    /**
     * @return bool
     */
    public function getChoicesAsValues()
    {
        return $this->getOption('choices_as_values', false);
    }

    /**
     * @param false|string $value
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#placeholder
     * @deprecated Since 2.6
     */
    public function setEmptyValue($value)
    {
        return $this->setOption('empty_value', $value);
    }

    /**
     * @return false|string
     * @deprecated Since 2.6
     */
    public function getEmptyValue()
    {
        return $this->getOption('empty_value');
    }

    /**
     * @param bool $expanded
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#expanded
     */
    public function setExpanded($expanded = true)
    {
        return $this->setOption('expanded', $expanded);
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getExpanded($default = false)
    {
        return $this->getOption('expanded', $default);
    }

    /**
     * @param bool $multiple
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#multiple
     */
    public function setMultiple($multiple = true)
    {
        return $this->setOption('multiple', $multiple);
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getMultiple($default = false)
    {
        return $this->getOption('multiple', $default);
    }

    /**
     * @return $this
     */
    public function asMultipleSelect()
    {
        return $this->setMultiple()->setExpanded(false);
    }

    /**
     * @return $this
     */
    public function asSelect()
    {
        return $this->setMultiple(false)->setExpanded(false);
    }

    /**
     * @return $this
     */
    public function asRadioButtons()
    {
        return $this->setMultiple(false)->setExpanded();
    }

    /**
     * @return $this
     */
    public function asCheckboxes()
    {
        return $this->setMultiple()->setExpanded();
    }

    /**
     * @param array $choices
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#preferred-choices
     */
    public function setPreferredChoices(array $choices)
    {
        return $this->setOption('preferred_choices', $choices);
    }

    /**
     * @param null|array $default
     * @return array
     */
    public function getPreferredChoices($default = array())
    {
        return $this->getOption('preferred_choices', $default);
    }
}
