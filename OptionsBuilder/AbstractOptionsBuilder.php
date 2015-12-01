<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Validator\Constraint;

abstract class AbstractOptionsBuilder implements OptionsBuilderInterface
{
    const OPTION_DEFAULT_VALUE = '%%if-value-is-set-then-default-value-is-overidden%%';

    /** @var array */
    protected $options = array();

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        $fullClass = get_called_class();
        $class = substr($fullClass, strrpos($fullClass, '\\') + 1);

        return strtolower(substr($class, 0, -14));
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function setOption($name, $value)
    {
        if ($value === self::OPTION_DEFAULT_VALUE) {
            $this->removeOption($name);
        } else {
            $this->options[$name] = $value;
        }

        return $this;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getOption($name)
    {
        return (array_key_exists($name, $this->options)) ? $this->options[$name] : self::OPTION_DEFAULT_VALUE;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function removeOption($name)
    {
        if (array_key_exists($name, $this->options)) {
            unset($this->options[$name]);
        }

        return $this;
    }

    /**
     * @return array
     */
    public function asArray()
    {
        return $this->options;
    }

    /**
     * @param string|null $child
     * @return array
     */
    public function asVariadic($child = null)
    {
        if ($child === null) {
            return array(static::getBuilderType(), $this->asArray());
        }

        return array($child, static::getBuilderType(), $this->asArray());
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
        if (is_array($attr) === false) {
            $attr = array();
        }
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
        $attr = $this->getOption('attr');

        if (empty($name)) {
            return $attr;
        }
        if (is_array($attr) === false) {
            return self::OPTION_DEFAULT_VALUE;
        }

        foreach ($attr as $attrName => $attrValue) {
            if ($attrName == $name) {
                return $attrValue;
            }
        }

        return self::OPTION_DEFAULT_VALUE;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function removeAttr($name)
    {
        $attr = array();
        $currentAttr = $this->getOption('attr');
        if (is_array($currentAttr) === false) {
            return $this;
        }
        foreach ($currentAttr as $attrName => $attrValue) {
            if ($attrName !== $name) {
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
     * @return array
     */
    public function getLabelAttr()
    {
        return $this->getOption('label_attr');
    }

    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function setDisabled($disabled = true)
    {
        return $this->setOption('disabled', $disabled);
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->getOption('disabled');
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
     * @return string|false
     */
    public function getTranslationDomain()
    {
        return $this->getOption('translation_domain');
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
        if (is_array($constraints) === false) {
            $constraints = array();
        }
        $constraints[] = $constraint;
        $this->setConstraints($constraints);

        return $this;
    }

    /**
     * @return array
     */
    public function getConstraints()
    {
        return $this->getOption('constraints');
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
     * @return array
     */
    public function getInvalidMessageParameters()
    {
        return $this->getOption('invalid_message_parameters');
    }

    /**
     * @param bool $readOnly
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#read-only
     */
    public function setReadOnly($readOnly = true)
    {
        return $this->setOption('read_only', $readOnly);
    }

    /**
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->getOption('read_only');
    }

    /**
     * @param bool $required
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#required
     */
    public function setRequired($required = true)
    {
        return $this->setOption('required', $required);
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->getOption('required');
    }

    /**
     * @param bool $trim
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#trim
     */
    public function setTrim($trim = true)
    {
        return $this->setOption('trim', $trim);
    }

    /**
     * @return bool
     */
    public function getTrim()
    {
        return $this->getOption('trim');
    }

    /**
     * @param bool $autoInitialize
     * @return bool
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize($autoInitialize = true)
    {
        return $this->setOption('auto_initialize', $autoInitialize);
    }

    /**
     * @return bool
     */
    public function getAutoInitialize()
    {
        return $this->getOption('auto_initialize');
    }

    /**
     * @param bool $mapped
     * @return $this
     */
    public function setMapped($mapped = true)
    {
        return $this->setOption('mapped', $mapped);
    }

    /**
     * @return bool
     */
    public function getMapped()
    {
        return $this->getOption('mapped');
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
