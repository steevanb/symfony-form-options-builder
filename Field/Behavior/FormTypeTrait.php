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
        return $this->setOption('constraints', $constraints);
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
        return $this->getOption('constraints', $default);
    }

    /**
     * @param mixed $emptyData
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#empty-data
     */
    public function setEmptyData($emptyData)
    {
        return $this->setOption('empty_data', $emptyData);
    }

    /**
     * @return mixed
     */
    public function getEmptyData()
    {
        return $this->getOption('empty_data');
    }

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message
     */
    public function setInvalidMessage($message)
    {
        return $this->setOption('invalid_message', $message);
    }

    /**
     * @return string
     */
    public function getInvalidMessage()
    {
        return $this->getOption('invalid_message');
    }

    /**
     * @param array $parameters
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message-parameters
     */
    public function setInvalidMessageParameters(array $parameters)
    {
        return $this->setOption('invalid_message_parameters', $parameters);
    }

    /**
     * @param null|array $default
     * @return array
     */
    public function getInvalidMessageParameters($default = array())
    {
        return $this->getOption('invalid_message_parameters', $default);
    }

    /**
     * @param bool $readOnly
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#read-only
     */
    public function setReadOnly($readOnly = true)
    {
        return $this->setOption('read_only', boolval($readOnly));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getReadOnly($default = false)
    {
        return $this->getOption('read_only', $default);
    }

    /**
     * @param bool $required
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#required
     */
    public function setRequired($required = true)
    {
        return $this->setOption('required', boolval($required));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getRequired($default = true)
    {
        return $this->getOption('required', $default);
    }

    /**
     * @param bool $trim
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#trim
     */
    public function setTrim($trim = true)
    {
        return $this->setOption('trim', boolval($trim));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getTrim($default = true)
    {
        return $this->getOption('trim', $default);
    }

    /**
     * @param bool $autoInitialize
     * @return bool
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize($autoInitialize = true)
    {
        return $this->setOption('auto_initialize', boolval($autoInitialize));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getAutoInitialize($default = true)
    {
        return $this->getOption('auto_initialize', $default);
    }
}
