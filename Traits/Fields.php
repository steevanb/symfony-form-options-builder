<?php

namespace steevanb\FormUtils\Traits;

use Symfony\Component\Form\FormBuilderInterface;
use steevanb\FormUtils\Fields as FieldsType;

trait Fields
{
    /** @var FormBuilderInterface */
    protected $builder;

    /**
     * @param FormBuilderInterface $builder
     * @return $this
     */
    public function setBuilder(FormBuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
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
    public function getFieldButton($id, $label = null)
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
    public function getFieldReset($id, $label = null)
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
    public function getFieldSubmit($id, $label = null, array $validationGroups = null)
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
    public function getFieldText($id, $label = null, $required = true)
    {
        return $this->getField('Text', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Email
     */
    public function getFieldEmail($id, $label = null, $required = true)
    {
        return $this->getField('Email', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Password
     */
    public function getFieldPassword($id, $label = null, $required = true)
    {
        return $this->getField('Password', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Search
     */
    public function getFieldSearch($id, $label = null, $required = true)
    {
        return $this->getField('Search', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Url
     */
    public function getFieldUrl($id, $label = null, $required = true)
    {
        return $this->getField('Url', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Textarea
     */
    public function getFieldTextArea($id, $label = null, $required = true)
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
    public function getFieldDate($id, $label = null, $format = null, $widget = FieldsType\Date::WIDGET_CHOICE, $required = true)
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
    public function getFieldBirthday($id, $label = null, $format = null, $widget = FieldsType\Birthday::WIDGET_CHOICE, $required = true)
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
    public function getFieldTime($id, $label = null, $widget = FieldsType\Time::WIDGET_CHOICE, $required = true)
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
    public function getFieldDateTime($id, $label = null, $dateFormat = null, $widget = FieldsType\DateTime::WIDGET_CHOICE, $required = true)
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
    public function getFieldInteger($id, $label = null, $required = true)
    {
        return $this->getField('Integer', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Number
     */
    public function getFieldNumber($id, $label = null, $required = true)
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
    public function getFieldPercent($id, $label = null, $type = FieldsType\Percent::TYPE_FRACTIONAL, $required = true)
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
    public function getFieldMoney($id, $label = null, $currency = 'EUR', $required = true)
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
    public function getFieldChoice($id, $label = null, array $choices = array(), $required = true)
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
    public function getFieldEntity($id, $class, $property = null, $label = null, $required = true)
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
    public function getFieldCountry($id, $label = null, $required = true)
    {
        return $this->getField('Country', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Language
     */
    public function getFieldLanguage($id, $label = null, $required = true)
    {
        return $this->getField('Language', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Locale
     */
    public function getFieldLocale($id, $label = null, $required = true)
    {
        return $this->getField('Locale', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Timezone
     */
    public function getFieldTimezone($id, $label = null, $required = true)
    {
        return $this->getField('Timezone', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Currency
     */
    public function getFieldCurrency($id, $label = null, $required = true)
    {
        return $this->getField('Currency', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $data
     * @return FieldsType\Hidden
     */
    public function getFieldHidden($id, $data = null)
    {
        $field = new FieldsType\Hidden($this->builder, $id);
        $field->setData($data);

        return $field;
    }
}
