<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Validator\Constraint;

class AbstractOptionsBuilder implements OptionsBuilderInterface
{
    /** @var array */
    protected $options = array();

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function setOption($name, $value)
    {
        $this->options[$name] = $value;

        return $this;
    }

    /**
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getOption($name, $default = null)
    {
        return (array_key_exists($name, $this->options)) ? $this->options[$name] : $default;
    }

    /**
     * @return array
     */
    public function asArray()
    {
        return $this->options;
    }

    /**
     * @param array $attr
     * @return array
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#attr
     */
    public function setAttr(array $attr)
    {
        return $this->setOption('attr', $attr);
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function addAttr($name, $value)
    {
        $attr = $this->getAttr();
        $attr[$name] = $value;
        $this->setAttr($attr);

        return $this;
    }

    /**
     * @param string $name
     * @return array|mixed
     */
    public function getAttr($name = null)
    {
        if (empty($name)) {
            return $this->getOption('attr');
        }

        foreach ($this->getOption('attr', array()) as $attrName => $attrValue) {
            if ($attrName == $name) {
                return $attrValue;
            }
        }

        return null;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function removeAttr($name)
    {
        $attr = array();
        foreach ($this->getOption('attr', array()) as $attrName => $attrValue) {
            if ($attrName != $name) {
                $attr[$attrName] = $attrValue;
            }
        }
        $this->setAttr($attr);

        return $this;
    }

    /**
     * @param string|false $label
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label
     */
    public function setLabel($label)
    {
        return $this->setOption('label', $label);
    }

    /**
     * @return string|false
     */
    public function getLabel()
    {
        return $this->getOption('label');
    }

    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label-attr
     */
    public function setLabelAttr(array $attr)
    {
        return $this->setOption('label_attr', $attr);
    }

    /**
     * @param null|array $default
     * @return array
     */
    public function getLabelAttr($default = array())
    {
        return $this->getOption('label_attr', $default);
    }

    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function setDisabled($disabled = true)
    {
        return $this->setOption('disabled', boolval($disabled));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getDisabled($default = false)
    {
        return $this->getOption('disabled', $default);
    }

    /**
     * @param string|false $domain
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain($domain)
    {
        return $this->setOption('translation_domain', $domain);
    }

    /**
     * @param null|string|false $default
     * @return string
     */
    public function getTranslationDomain($default = null)
    {
        return $this->getOption('translation_domain', $default);
    }

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

    /**
     * @param bool $mapped
     * @return $this
     */
    public function setMapped($mapped = true)
    {
        return $this->setOption('mapped', boolval($mapped));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getMapped($default = true)
    {
        return $this->getOption('mapped', $default);
    }

    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true)
    {
        return $this->setOption('error_bubbling', $errorBubbling);
    }

    /**
     * @return null|bool
     */
    public function getErrorBubbling()
    {
        return $this->getOption('error_bubbling');
    }

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data
     */
    public function setData($data)
    {
        return $this->setOption('data', $data);
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->getOption('data');
    }

    /**
     * @param string $path
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath($path)
    {
        return $this->setOption('property_path', $path);
    }

    /**
     * @return string
     */
    public function getPropertyPath()
    {
        return $this->getOption('property_path');
    }
}
