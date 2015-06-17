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
     * @param $id
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
     * @param $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Date
     */
    public function getFieldDate($id, $label = null, $required = true)
    {
        return $this->getField('Date', $id, $label, $required);
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
}
