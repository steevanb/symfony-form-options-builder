<?php

namespace steevanb\FormUtils;

use Symfony\Component\Form\FormBuilderInterface;
use steevanb\FormUtils\Field;
use Symfony\Component\Form\FormTypeInterface;

trait FieldsTrait
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
     * @return Fields\AbstractField
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
     * @return Fields\Button
     */
    protected function getFieldButton($id, $label = null)
    {
        $field = new Fields\Button($this->builder, $id);
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @return Fields\Reset
     */
    protected function getFieldReset($id, $label = null)
    {
        $field = new Fields\Reset($this->builder, $id);
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param array $validationGroups
     * @return Fields\Submit
     */
    protected function getFieldSubmit($id, $label = null, array $validationGroups = null)
    {
        $field = new Fields\Submit($this->builder, $id);
        $field->setLabel($label);
        $field->setValidationGroups($validationGroups);

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Text
     */
    protected function getFieldText($id, $label = null, $required = true)
    {
        return $this->getField('Text', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Email
     */
    protected function getFieldEmail($id, $label = null, $required = true)
    {
        return $this->getField('Email', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Password
     */
    protected function getFieldPassword($id, $label = null, $required = true)
    {
        return $this->getField('Password', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Search
     */
    protected function getFieldSearch($id, $label = null, $required = true)
    {
        return $this->getField('Search', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Url
     */
    protected function getFieldUrl($id, $label = null, $required = true)
    {
        return $this->getField('Url', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Textarea
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
     * @return Fields\Date
     */
    protected function getFieldDate($id, $label = null, $format = null, $widget = Fields\Date::WIDGET_CHOICE, $required = true)
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
     * @return Fields\Birthday
     */
    protected function getFieldBirthday($id, $label = null, $format = null, $widget = Fields\Birthday::WIDGET_CHOICE, $required = true)
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
     * @return Fields\Time
     */
    protected function getFieldTime($id, $label = null, $widget = Fields\Time::WIDGET_CHOICE, $required = true)
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
     * @return Fields\DateTime
     */
    protected function getFieldDateTime($id, $label = null, $dateFormat = null, $widget = Fields\DateTime::WIDGET_CHOICE, $required = true)
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
     * @return Fields\Integer
     */
    protected function getFieldInteger($id, $label = null, $required = true)
    {
        return $this->getField('Integer', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Number
     */
    protected function getFieldNumber($id, $label = null, $required = true)
    {
        return $this->getField('Number', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param string $type Use steevanb\FormUtils\Field\Percent::TYPE_XXX
     * @param bool $required
     * @return Fields\Percent
     */
    protected function getFieldPercent($id, $label = null, $type = Fields\Percent::TYPE_FRACTIONAL, $required = true)
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
     * @return Fields\Money
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
     * @return Fields\Choice
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
     * @return Fields\Entity
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
     * @return Fields\Country
     */
    protected function getFieldCountry($id, $label = null, $required = true)
    {
        return $this->getField('Country', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Language
     */
    protected function getFieldLanguage($id, $label = null, $required = true)
    {
        return $this->getField('Language', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Locale
     */
    protected function getFieldLocale($id, $label = null, $required = true)
    {
        return $this->getField('Locale', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Timezone
     */
    protected function getFieldTimezone($id, $label = null, $required = true)
    {
        return $this->getField('Timezone', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Currency
     */
    protected function getFieldCurrency($id, $label = null, $required = true)
    {
        return $this->getField('Currency', $id, $label, $required);
    }

    /**
     * @param string $id
     * @param string $data
     * @return Fields\Hidden
     */
    protected function getFieldHidden($id, $data = null)
    {
        $field = new Fields\Hidden($this->builder, $id);
        if ($data !== null) {
            $field->setData($data);
        }

        return $field;
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return Fields\Checkbox
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
     * @return Fields\Collection
     */
    protected function getFieldCollection($id, $type, $label = null, $required = true)
    {
        $field = $this->getField('Collection', $id, $label, $required);
        $field->setType($type);

        return $field;
    }
}
