<?php

namespace steevanb\FormUtils\Fields\Traits;

trait FormType
{
    use BaseType;

    /**
     * @param array $constraints
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#constraints
     */
    public function setConstraints(array $constraints)
    {
        return $this->setParameter('constraints', $constraints);
    }

    /**
     * @param Constraint $constraint
     * @return $this
     */
    public function addConstraint(Constraint $constraint)
    {
        $constraints = $this->getConstraints();
        $constraints[] = $constraint;
        $this->setConstraints($constraints);

        return $this;
    }

    /**
     * @return array
     */
    public function getConstraints()
    {
        return $this->getParameter('constraints', array());
    }

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data
     */
    public function setData($data)
    {
        return $this->setParameter('data', $data);
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->getParameter('data');
    }

    /**
     * @param mixed $emptyData
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#empty-data
     */
    public function setEmptyData($emptyData)
    {
        return $this->setParameter('empty_data', $emptyData);
    }

    /**
     * @return mixed
     */
    public function getEmptyData()
    {
        return $this->getParameter('empty_data');
    }

    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true)
    {
        return $this->setParameter('error_bubbling', $errorBubbling);
    }

    /**
     * @return null|bool
     */
    public function getErrorBubbling()
    {
        return $this->getParameter('error_bubbling');
    }

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message
     */
    public function setInvalidMessage($message)
    {
        return $this->setParameter('invalid_message', $message);
    }

    /**
     * @return string
     */
    public function getInvalidMessage()
    {
        return $this->getParameter('invalid_message');
    }

    /**
     * @param array $parameters
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message-parameters
     */
    public function setInvalidMessageParameters(array $parameters)
    {
        return $this->setParameter('invalid_message_parameters', $parameters);
    }

    /**
     * @return array
     */
    public function getInvalidMessageParameters()
    {
        return $this->getParameter('invalid_message_parameters', array());
    }

    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label-attr
     */
    public function setLabelAttr(array $attr)
    {
        return $this->setParameter('label_attr', $attr);
    }

    /**
     * @return array
     */
    public function getLabelAttr()
    {
        return $this->getParameter('label_attr', array());
    }

    /**
     * @param bool $mapped
     * @return $this
     */
    public function setMapped($mapped = true)
    {
        return $this->setParameter('mapped', boolval($mapped));
    }

    /**
     * @return bool
     */
    public function getMapped()
    {
        return $this->getParameter('mapped', true);
    }

    /**
     * @param string $path
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath($path)
    {
        return $this->setParameter('property_path', $path);
    }

    /**
     * @return string
     */
    public function getPropertyPath()
    {
        return $this->getParameter('property_path', $this->getId());
    }

    /**
     * @param bool $readOnly
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#read-only
     */
    public function setReadOnly($readOnly = true)
    {
        return $this->setParameter('read_only', boolval($readOnly));
    }

    /**
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->getParameter('read_only', false);
    }

    /**
     * @param bool $required
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#required
     */
    public function setRequired($required = true)
    {
        return $this->setParameter('required', boolval($required));
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->getParameter('required', true);
    }

    /**
     * @param bool $trim
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#trim
     */
    public function setTrim($trim = true)
    {
        return $this->setParameter('trim', boolval($trim));
    }

    /**
     * @return bool
     */
    public function getTrim()
    {
        return $this->getParameter('trim', true);
    }

    /**
     * @param bool $autoInitialize
     * @return bool
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize($autoInitialize = true)
    {
        return $this->setParameter('auto_initialize', boolval($autoInitialize));
    }

    /**
     * @return bool
     */
    public function getAutoInitialize()
    {
        return $this->getParameter('auto_initialize', true);
    }
}
