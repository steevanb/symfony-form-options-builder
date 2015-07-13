<?php

namespace steevanb\FormUtils\Fields;

use Symfony\Component\Form\FormBuilderInterface;

class AbstractField
{
    /** @var FormBuilderInterface */
    protected $builder;

    /** @var string */
    protected $id;

    /** @var array */
    protected $parameters = array();

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
        $fullClassName = get_class($this);
        $className = ($pos = strrpos($fullClassName, '\\')) ? substr($fullClassName, $pos + 1) : $fullClassName;

        return strtolower($className);
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function setParameter($name, $value)
    {
        $this->parameters[$name] = $value;

        return $this;
    }

    /**
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getParameter($name, $default = null)
    {
        return (array_key_exists($name, $this->parameters)) ? $this->parameters[$name] : $default;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return $this
     */
    public function add()
    {
        $this->builder->add($this->id, $this->getFieldType(), $this->parameters);

        return $this;
    }
}
