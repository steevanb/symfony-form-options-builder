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

    protected function getField($class, $id, $label)
    {

    }

    /**
     * @param string $id
     * @param string $label
     * @param bool $required
     * @return FieldsType\Text
     */
    public function getFieldText($id, $label, $required = true)
    {
        $field = new FieldsType\Integer($this->builder, $id);
        $field->setLabel($label);
        $field->setRequired($required);

        return $field;
    }

    public function getFieldDate($id, $label, $required = true)
    {
        $field = new FieldsType\Date($this->builder, $id);
        $field->setLabel($label);
        $field->setRequired($required);

        return $field;
    }
}