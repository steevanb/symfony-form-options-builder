<?php

namespace steevanb\FormUtils;

use steevanb\FormUtils\Field;
use Symfony\Component\Form\FormTypeInterface;

trait FieldTrait
{
    /**
     * @param string $class
     * @param string $label
     * @param bool $required
     * @return Field\AbstractField
     */
    protected function getField($class, $label = null, $required = true)
    {
        $fullClass = 'steevanb\\FormUtils\\Field\\' . $class;
        $field = new $fullClass();
        $field->setLabel($label);
        $field->setRequired($required);

        return $field;
    }

    /**
     * @param string $label
     * @return Field\Button
     */
    protected function getFieldButton($label = null)
    {
        $field = new Field\Button();
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $label
     * @return Field\Reset
     */
    protected function getFieldReset($label = null)
    {
        $field = new Field\Reset();
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $label
     * @param array $validationGroups
     * @return Field\Submit
     */
    protected function getFieldSubmit($label = null, array $validationGroups = null)
    {
        $field = new Field\Submit();
        $field->setLabel($label);
        $field->setValidationGroups($validationGroups);

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Text
     */
    protected function getFieldText($label = null, $required = true)
    {
        return $this->getField('Text', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Email
     */
    protected function getFieldEmail($label = null, $required = true)
    {
        return $this->getField('Email', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Password
     */
    protected function getFieldPassword($label = null, $required = true)
    {
        return $this->getField('Password', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Search
     */
    protected function getFieldSearch($label = null, $required = true)
    {
        return $this->getField('Search', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Url
     */
    protected function getFieldUrl($label = null, $required = true)
    {
        return $this->getField('Url', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Textarea
     */
    protected function getFieldTextArea($label = null, $required = true)
    {
        return $this->getField('Textarea', $label, $required);
    }

    /**
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return Field\Date
     */
    protected function getFieldDate($label = null, $format = null, $widget = Field\Date::WIDGET_CHOICE, $required = true)
    {
        /** @var Field\Date $field */
        $field = $this->getField('Date', $label, $required);
        if ($format !== null) {
            $field->setFormat($format);
        }
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return Field\Birthday
     */
    protected function getFieldBirthday($label = null, $format = null, $widget = Field\Birthday::WIDGET_CHOICE, $required = true)
    {
        /** @var Field\Birthday $field */
        $field = $this->getField('Birthday', $label, $required);
        if ($format !== null) {
            $field->setFormat($format);
        }
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return Field\Time
     */
    protected function getFieldTime($label = null, $widget = Field\Time::WIDGET_CHOICE, $required = true)
    {
        /** @var Field\Time $field */
        $field = $this->getField('Time', $label, $required);
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return Field\DateTime
     */
    protected function getFieldDateTime($label = null, $dateFormat = null, $widget = Field\DateTime::WIDGET_CHOICE, $required = true)
    {
        /** @var Field\DateTime $field */
        $field = $this->getField('DateTime', $label, $required);
        if ($dateFormat !== null) {
            $field->setDateFormat($dateFormat);
        }
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Integer
     */
    protected function getFieldInteger($label = null, $required = true)
    {
        return $this->getField('Integer', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Number
     */
    protected function getFieldNumber($label = null, $required = true)
    {
        return $this->getField('Number', $label, $required);
    }

    /**
     * @param string $label
     * @param string $type Use steevanb\FormUtils\Field\Percent::TYPE_XXX
     * @param bool $required
     * @return Field\Percent
     */
    protected function getFieldPercent($label = null, $type = Field\Percent::TYPE_FRACTIONAL, $required = true)
    {
        /** @var Field\Percent $field */
        $field = $this->getField('Percent', $label, $required);
        $field->setType($type);

        return $field;
    }

    /**
     * @param string $label
     * @param string $currency
     * @param bool $required
     * @return Field\Money
     */
    protected function getFieldMoney($label = null, $currency = 'EUR', $required = true)
    {
        /** @var Field\Money $field */
        $field = $this->getField('Money', $label, $required);
        $field->setCurrency($currency);

        return $field;
    }

    /**
     * @param string $label
     * @param array $choices
     * @param bool $required
     * @return Field\Choice
     */
    protected function getFieldChoice($label = null, array $choices = array(), $required = true)
    {
        /** @var Field\Choice $field */
        $field = $this->getField('Choice', $label, $required);
        $field->setChoices($choices);

        return $field;
    }

    /**
     * @param string $class
     * @param string $property
     * @param string $label
     * @param bool $required
     * @return Field\Entity
     */
    protected function getFieldEntity($class, $property = null, $label = null, $required = true)
    {
        /** @var Field\Entity $field */
        $field = $this->getField('Entity',  $label, $required);
        $field->setClass($class);
        $field->setProperty($property);

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Country
     */
    protected function getFieldCountry($label = null, $required = true)
    {
        return $this->getField('Country', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Language
     */
    protected function getFieldLanguage( $label = null, $required = true)
    {
        return $this->getField('Language', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Locale
     */
    protected function getFieldLocale($label = null, $required = true)
    {
        return $this->getField('Locale', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Timezone
     */
    protected function getFieldTimezone($label = null, $required = true)
    {
        return $this->getField('Timezone', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Currency
     */
    protected function getFieldCurrency($label = null, $required = true)
    {
        return $this->getField('Currency', $label, $required);
    }

    /**
     * @param string $data
     * @return Field\Hidden
     */
    protected function getFieldHidden($data = null)
    {
        $field = new Field\Hidden();
        if ($data !== null) {
            $field->setData($data);
        }

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return Field\Checkbox
     */
    protected function getFieldCheckbox($label = null, $required = true)
    {
        return $this->getField('Checkbox', $label, $required);
    }

    /**
     * @param FormTypeInterface|string $type
     * @param string $label
     * @param bool $required
     * @return Field\Collection
     */
    protected function getFieldCollection($type, $label = null, $required = true)
    {
        /** @var Field\Collection $field */
        $field = $this->getField('Collection', $label, $required);
        $field->setType($type);

        return $field;
    }
}
