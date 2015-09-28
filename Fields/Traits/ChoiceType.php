<?php

namespace steevanb\FormUtils\Fields\Traits;

trait ChoiceType
{
    use FormType;
    use PlaceHolder;

    /**
     * @param array $choices
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#choices
     */
    public function setChoices(array $choices)
    {
        return $this->setParameter('choices', $choices);
    }

    /**
     * @param null|array $default
     * @return array
     */
    public function getChoices($default = array())
    {
        return $this->getParameter('choices', $default);
    }

    /**
     * @param mixed $attr
     * @return $this
     * @link http://symfony.com/blog/new-in-symfony-2-7-choice-form-type-refactorization
     */
    public function setChoiceAttr($attr)
    {
        return $this->setParameter('choice_attr', $attr);
    }

    /**
     * @return mixed
     */
    public function getChoiceAttr()
    {
        return $this->getParameter('choice_attr');
    }

    /**
     * @param false|string $value
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#placeholder
     * @deprecated Since 2.6
     */
    public function setEmptyValue($value)
    {
        return $this->setParameter('empty_value', $value);
    }

    /**
     * @return false|string
     * @deprecated Since 2.6
     */
    public function getEmptyValue()
    {
        return $this->getParameter('empty_value');
    }

    /**
     * @param bool $expanded
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#expanded
     */
    public function setExpanded($expanded = true)
    {
        return $this->setParameter('expanded', $expanded);
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getExpanded($default = false)
    {
        return $this->getParameter('expanded', $default);
    }

    /**
     * @param bool $multiple
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#multiple
     */
    public function setMultiple($multiple = true)
    {
        return $this->setParameter('multiple', $multiple);
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getMultiple($default = false)
    {
        return $this->getParameter('multiple', $default);
    }

    /**
     * @param array $choices
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#preferred-choices
     */
    public function setPreferredChoices(array $choices)
    {
        return $this->setParameter('preferred_choices', $choices);
    }

    /**
     * @param null|array $default
     * @return array
     */
    public function getPreferredChoices($default = array())
    {
        return $this->getParameter('preferred_choices', $default);
    }
}
