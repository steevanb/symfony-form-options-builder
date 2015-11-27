<?php

namespace steevanb\FormUtils\Field\Behavior;

use Symfony\Component\Validator\Constraint;

trait FormTypeTrait
{
    use BaseTypeTrait;
    use ErrorBubblingTrait;
    use DataTrait;
    use MappedTrait;
    use PropertyPathTrait;

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
     * @param null|array $default
     * @return array
     */
    public function getConstraints($default = array())
    {
        return $this->getParameter('constraints', $default);
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
     * @param null|array $default
     * @return array
     */
    public function getInvalidMessageParameters($default = array())
    {
        return $this->getParameter('invalid_message_parameters', $default);
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
     * @param null|bool $default
     * @return bool
     */
    public function getReadOnly($default = false)
    {
        return $this->getParameter('read_only', $default);
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
     * @param null|bool $default
     * @return bool
     */
    public function getRequired($default = true)
    {
        return $this->getParameter('required', $default);
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
     * @param null|bool $default
     * @return bool
     */
    public function getTrim($default = true)
    {
        return $this->getParameter('trim', $default);
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
     * @param null|bool $default
     * @return bool
     */
    public function getAutoInitialize($default = true)
    {
        return $this->getParameter('auto_initialize', $default);
    }
}
