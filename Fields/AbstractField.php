<?php

namespace steevanb\FormUtils\Fields;

use Symfony\Component\Form\FormBuilderInterface;

class AbstractField
{
    /** @var FormBuilderInterface */
    protected $builder;

    /** @var string */
    protected $id;

    /**
     * @param FormBuilderInterface $builder
     * @param string $id
     */
    public function __construct(FormBuilderInterface $builder, $id)
    {
        $this->builder = $builder;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        $fullClassName = get_class($this);
        $className = ($pos = strrpos($fullClassName, '\\')) ? substr($fullClassName, $pos + 1) : $fullClassName;

        return strtolower($className);
    }

    public function add()
    {
        $this->builder->add($this->id, $this->getType(), $this->parameters);
    }
}
