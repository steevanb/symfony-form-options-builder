<?php

namespace steevanb\FormUtils\Traits;

use Symfony\Component\Form\FormBuilderInterface;
use steevanb\FormUtils\Fields as FieldsType;
use Symfony\Component\Form\FormTypeInterface;

trait Fields
{
    /** @var FormBuilderInterface */
    protected $builder;

    /**
     * @param FormBuilderInterface $builder
     * @return $this
     */
    protected function setBuilder(FormBuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * @return FormBuilderInterface
     */
    protected function getBuilder()
    {
        return $this->builder;
    }

    /**
     * @param string $class
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\AbstractField
     */
    protected function getField($class, $id, $label = null, $required = true)
    {
        $fullClass = 'steevanb\\FormUtils\\Fields\\' . $class;
        $field = new $fullClass($this->builder, $id);
        $field->setLabel($label);
        $field->setRequired($required);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @return FieldsType\Button
     */
    protected function getFieldButton($id, $label = null)
    {
        $field = new FieldsType\Button($this->builder, $id);
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @return FieldsType\Reset
     */
    protected function getFieldReset($id, $label = null)
    {
        $field = new FieldsType\Reset($this->builder, $id);
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param array $validationGroups
     * @return FieldsType\Submit
     */
    protected function getFieldSubmit($id, $label = null, array $validationGroups = null)
    {
        $field = new FieldsType\Submit($this->builder, $id);
        $field->setLabel($label);
        $field->setValidationGroups($validationGroups);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Text
     */
    protected function getFieldText($id, $label = null, $required = true)
    {
        return $this->getField('Text', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Email
     */
    protected function getFieldEmail($id, $label = null, $required = true)
    {
        return $this->getField('Email', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Password
     */
    protected function getFieldPassword($id, $label = null, $required = true)
    {
        return $this->getField('Password', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Search
     */
    protected function getFieldSearch($id, $label = null, $required = true)
    {
        return $this->getField('Search', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Url
     */
    protected function getFieldUrl($id, $label = null, $required = true)
    {
        return $this->getField('Url', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Textarea
     */
    protected function getFieldTextArea($id, $label = null, $required = true)
    {
        return $this->getField('Textarea', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return FieldsType\Date
     */
    protected function getFieldDate($id, $label = null, $format = null, $widget = FieldsType\Date::WIDGET_CHOICE, $required = true)
    {
        $field = $this->getField('Date', $id, $label, $required);
        if ($format !== null) {
            $field->setFormat($format);
        }
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return FieldsType\Birthday
     */
    protected function getFieldBirthday($id, $label = null, $format = null, $widget = FieldsType\Birthday::WIDGET_CHOICE, $required = true)
    {
        $field = $this->getField('Birthday', $id, $label, $required);
        if ($format !== null) {
            $field->setFormat($format);
        }
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return FieldsType\Time
     */
    protected function getFieldTime($id, $label = null, $widget = FieldsType\Time::WIDGET_CHOICE, $required = true)
    {
        $field = $this->getField('Time', $id, $label, $required);
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return FieldsType\DateTime
     */
    protected function getFieldDateTime($id, $label = null, $dateFormat = null, $widget = FieldsType\DateTime::WIDGET_CHOICE, $required = true)
    {
        $field = $this->getField('DateTime', $id, $label, $required);
        if ($dateFormat !== null) {
            $field->setDateFormat($dateFormat);
        }
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Integer
     */
    protected function getFieldInteger($id, $label = null, $required = true)
    {
        return $this->getField('Integer', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Number
     */
    protected function getFieldNumber($id, $label = null, $required = true)
    {
        return $this->getField('Number', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param string $type Use steevanb\FormUtils\Fields\Percent::TYPE_XXX
     * @param bool $required
     * @return FieldsType\Percent
     */
    protected function getFieldPercent($id, $label = null, $type = FieldsType\Percent::TYPE_FRACTIONAL, $required = true)
    {
        $field = $this->getField('Percent', $id, $label, $required);
        $field->setType($type);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param string $currency
     * @param bool $required
     * @return FieldsType\Money
     */
    protected function getFieldMoney($id, $label = null, $currency = 'EUR', $required = true)
    {
        $field = $this->getField('Money', $id, $label, $required);
        $field->setCurrency($currency);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param array $choices
     * @param bool $required
     * @return FieldsType\Choice
     */
    protected function getFieldChoice($id, $label = null, array $choices = array(), $required = true)
    {
        $field = $this->getField('Choice', $id, $label, $required);
        $field->setChoices($choices);

        return $field;
    }

    /**
     * @param string $id
     * @param string $class
     * @param string $property
     * @param string $label
     * @param bool $required
     * @return FieldsType\Entity
     */
    protected function getFieldEntity($id, $class, $property = null, $label = null, $required = true)
    {
        $field = $this->getField('Entity', $id, $label, $required);
        $field->setClass($class);
        $field->setProperty($property);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Country
     */
    protected function getFieldCountry($id, $label = null, $required = true)
    {
        return $this->getField('Country', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Language
     */
    protected function getFieldLanguage($id, $label = null, $required = true)
    {
        return $this->getField('Language', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Locale
     */
    protected function getFieldLocale($id, $label = null, $required = true)
    {
        return $this->getField('Locale', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Timezone
     */
    protected function getFieldTimezone($id, $label = null, $required = true)
    {
        return $this->getField('Timezone', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Currency
     */
    protected function getFieldCurrency($id, $label = null, $required = true)
    {
        return $this->getField('Currency', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $data
     * @return FieldsType\Hidden
     */
    protected function getFieldHidden($id, $data = null)
    {
        $field = new FieldsType\Hidden($this->builder, $id);
        if ($data !== null) {
            $field->setData($data);
        }

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Checkbox
     */
    protected function getFieldCheckbox($id, $label = null, $required = true)
    {
        return $this->getField('Checkbox', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param FormTypeInterface|string $type
     * @param string $label
     * @param bool $required
     * @return FieldsType\Collection
     */
    protected function getFieldCollection($id, $type, $label = null, $required = true)
    {
        $field = $this->getField('Collection', $id, $label, $required);
        $field->setType($type);

        return $field;
    }
}
