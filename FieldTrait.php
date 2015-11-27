<?php

namespace steevanb\FormUtils;

use steevanb\FormUtils\OptionsBuilder;
use Symfony\Component\Form\FormTypeInterface;

trait FieldTrait
{
    /**
     * @param string $class
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\AbstractOptionBuilder
     */
    protected function getFieldOptionsBuilder($class, $label = null, $required = true)
    {
        $fullClass = 'steevanb\\FormUtils\\OptionsBuilder\\' . $class;
        $field = new $fullClass();
        $field->setLabel($label);
        $field->setRequired($required);

        return $field;
    }

    /**
     * @param string $label
     * @return OptionsBuilder\Button
     */
    protected function getButtonOptionsBuilder($label = null)
    {
        $field = new OptionsBuilder\Button();
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $label
     * @return OptionsBuilder\Reset
     */
    protected function getResetOptionsBuilder($label = null)
    {
        $field = new OptionsBuilder\Reset();
        $field->setLabel($label);

        return $field;
    }

    /**
     * @param string $label
     * @param array $validationGroups
     * @return OptionsBuilder\Submit
     */
    protected function getSubmitOptionsBuilder($label = null, array $validationGroups = null)
    {
        $field = new OptionsBuilder\Submit();
        $field->setLabel($label);
        $field->setValidationGroups($validationGroups);

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Text
     */
    protected function getTextOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Text', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Email
     */
    protected function getEmailOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Email', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Password
     */
    protected function getPasswordOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Password', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Search
     */
    protected function getSearchOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Search', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Url
     */
    protected function getUrlOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Url', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Textarea
     */
    protected function getTextAreaOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Textarea', $label, $required);
    }

    /**
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return OptionsBuilder\Date
     */
    protected function getDateOptionsBuilder($label = null, $format = null, $widget = OptionsBuilder\Date::WIDGET_CHOICE, $required = true)
    {
        /** @var OptionsBuilder\Date $field */
        $field = $this->getFieldOptionsBuilder('Date', $label, $required);
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
     * @return OptionsBuilder\Birthday
     */
    protected function getBirthdayOptionsBuilder($label = null, $format = null, $widget = OptionsBuilder\Birthday::WIDGET_CHOICE, $required = true)
    {
        /** @var OptionsBuilder\Birthday $field */
        $field = $this->getFieldOptionsBuilder('Birthday', $label, $required);
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
     * @return OptionsBuilder\Time
     */
    protected function getTimeOptionsBuilder($label = null, $widget = OptionsBuilder\Time::WIDGET_CHOICE, $required = true)
    {
        /** @var OptionsBuilder\Time $field */
        $field = $this->getFieldOptionsBuilder('Time', $label, $required);
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $label
     * @param int|string format
     * @param string $widget
     * @param bool $required
     * @return OptionsBuilder\DateTime
     */
    protected function getDateTimeOptionsBuilder($label = null, $dateFormat = null, $widget = OptionsBuilder\DateTime::WIDGET_CHOICE, $required = true)
    {
        /** @var OptionsBuilder\DateTime $field */
        $field = $this->getFieldOptionsBuilder('DateTime', $label, $required);
        if ($dateFormat !== null) {
            $field->setDateFormat($dateFormat);
        }
        $field->setWidget($widget);

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Integer
     */
    protected function getIntegerOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Integer', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Number
     */
    protected function getNumberOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Number', $label, $required);
    }

    /**
     * @param string $label
     * @param string $type Use steevanb\FormUtils\OptionsBuilder\Percent::TYPE_XXX
     * @param bool $required
     * @return OptionsBuilder\Percent
     */
    protected function getPercentOptionsBuilder($label = null, $type = OptionsBuilder\Percent::TYPE_FRACTIONAL, $required = true)
    {
        /** @var OptionsBuilder\Percent $field */
        $field = $this->getFieldOptionsBuilder('Percent', $label, $required);
        $field->setType($type);

        return $field;
    }

    /**
     * @param string $label
     * @param string $currency
     * @param bool $required
     * @return OptionsBuilder\Money
     */
    protected function getMoneyOptionsBuilder($label = null, $currency = 'EUR', $required = true)
    {
        /** @var OptionsBuilder\Money $field */
        $field = $this->getFieldOptionsBuilder('Money', $label, $required);
        $field->setCurrency($currency);

        return $field;
    }

    /**
     * @param string $label
     * @param array $choices
     * @param bool $required
     * @return OptionsBuilder\Choice
     */
    protected function getChoiceOptionsBuilder($label = null, array $choices = array(), $required = true)
    {
        /** @var OptionsBuilder\Choice $field */
        $field = $this->getFieldOptionsBuilder('Choice', $label, $required);
        $field->setChoices($choices);

        return $field;
    }

    /**
     * @param string $class
     * @param string $property
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Entity
     */
    protected function getEntityOptionsBuilder($class, $property = null, $label = null, $required = true)
    {
        /** @var OptionsBuilder\Entity $field */
        $field = $this->getFieldOptionsBuilder('Entity',  $label, $required);
        $field->setClass($class);
        $field->setProperty($property);

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Country
     */
    protected function getCountryOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Country', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Language
     */
    protected function getLanguage( $label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Language', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Locale
     */
    protected function getLocaleOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Locale', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Timezone
     */
    protected function getTimezoneOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Timezone', $label, $required);
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Currency
     */
    protected function getCurrencyOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Currency', $label, $required);
    }

    /**
     * @param string $data
     * @return OptionsBuilder\Hidden
     */
    protected function getHiddenOptionsBuilder($data = null)
    {
        $field = new OptionsBuilder\Hidden();
        if ($data !== null) {
            $field->setData($data);
        }

        return $field;
    }

    /**
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Checkbox
     */
    protected function getCheckboxOptionsBuilder($label = null, $required = true)
    {
        return $this->getFieldOptionsBuilder('Checkbox', $label, $required);
    }

    /**
     * @param FormTypeInterface|string $type
     * @param string $label
     * @param bool $required
     * @return OptionsBuilder\Collection
     */
    protected function getCollectionOptionsBuilder($type, $label = null, $required = true)
    {
        /** @var OptionsBuilder\Collection $field */
        $field = $this->getFieldOptionsBuilder('Collection', $label, $required);
        $field->setType($type);

        return $field;
    }
}
