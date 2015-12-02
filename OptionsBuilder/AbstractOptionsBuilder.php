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
     * @param string|null $action
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#action
     */
    public function setAction($action)
    {
        return $this->setOption('action', $action);
    }

    /**
     * @return string|null
     */
    public function getAction()
    {
        return $this->getOption('action');
    }

    /**
     * @param string $method
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#method
     */
    public function setMethod($method)
    {
        return $this->setOption('method', $method);
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->getOption('method');
    }

    /**
     * @param bool $allow
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#allow-extra-fields
     * @since 2.6
     */
    public function setAllowExtraFields($allow = true)
    {
        return $this->setOption('allow_extra_fields', $allow);
    }

    /**
     * @return bool
     * @since 2.6
     */
    public function getAllowExtraFields()
    {
        return $this->getOption('allow_extra_fields');
    }

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#extra-fields-message
     */
    public function setExtraFieldsMessage($message)
    {
        return $this->setOption('extra_fields_message', $message);
    }

    /**
     * @return string
     */
    public function getExtraFieldsMessage()
    {
        return $this->getOption('extra_fields_message');
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
     * @link http://symfony.com/doc/2.8/reference/forms/types/choice.html#read-only
     * @deprecated Since 2.8
     */
    public function setReadOnly($readOnly = true)
    {
        return $this->setOption('read_only', $readOnly);
    }

    /**
     * @return bool
     * @deprecated Since 2.8
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
     * @return $this
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

    /**
     * @param bool $compound
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#compound
     */
    public function setCompound($compound)
    {
        return $this->setOption('compound', $compound);
    }

    /**
     * @return bool
     */
    public function getCompound()
    {
        return $this->getOption('compound');
    }

    /**
     * @param bool $inherit
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#inherit-data
     */
    public function setInheritData($inherit)
    {
        return $this->setOption('inherit_data', $inherit);
    }

    /**
     * @return bool|null
     */
    public function getInheritData()
    {
        return $this->getOption('inherit_data');
    }

    /**
     * @param $validation
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#cascade-validation
     * @deprecated Since 2.8
     */
    public function setCascadeValidation($validation = true)
    {
        return $this->setOption('cascade_validation', $validation);
    }

    /**
     * @return bool
     * @deprecated Since 2.8
     */
    public function getCascadeValidation()
    {
        return $this->getOption('cascade_validation');
    }

    /**
     * @param string|null $pattern
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#pattern
     * @deprecated Since 2.5
     */
    public function setPattern($pattern)
    {
        return $this->setOption('pattern', $pattern);
    }

    /**
     * @return string|null
     * @deprecated Since 2.5
     */
    public function getPattern()
    {
        return $this->getOption('pattern');
    }

    /**
     * @param string|null $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function setPostMaxSizeMessage($message)
    {
        return $this->setOption('post_max_size_message', $message);
    }

    /**
     * @return string|null
     */
    public function getPostMaxSizeMessage()
    {
        return $this->getOption('post_max_size_message');
    }

    /**
     * @param string $name
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#block-name
     */
    public function setBlockName($name)
    {
        return $this->setOption('block_name', $name);
    }

    /**
     * @return string
     */
    public function getBlockName()
    {
        return $this->getOption('block_name');
    }
}
