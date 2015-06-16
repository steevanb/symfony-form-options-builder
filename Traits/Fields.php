<?php

namespace steevanb\FormUtils\Traits;

use Symfony\Component\Form\FormBuilderInterface;
use steevanb\FormUtils\Fields as FieldsType;

trait Fields
{
    /** @var FormBuilderInterface */
    protected $builder;

    /** @var bool */
    protected $errorBubbling;

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
     * @param bool $errorBubbling
     * @return $this
     */
    public function setErrorBubbling($errorBubbling)
    {
        $this->errorBubbling = $errorBubbling;

        return $this;
    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Text
     */
    public function getFieldText($id, $label, $required = true)
    {
        $field = new FieldsType\Text($this->builder, $id);
        $field->setLabel($label);
        $field->setRequired($required);
        $field->setErrorBubbling($this->errorBubbling);

        return $field;
    }
}