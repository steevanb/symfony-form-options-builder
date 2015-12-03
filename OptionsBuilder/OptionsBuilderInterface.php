<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Validator\Constraint;

interface OptionsBuilderInterface
{
    /**
     * @return OptionsBuilderInterface
     */
    public static function create();

    /**
     * @return string
     */
    public static function getBuilderType();

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function setOption($name, $value);

    /**
     * @param string $name
     * @return mixed
     */
    public function getOption($name);

    /**
     * @return array
     */
    public function asArray();

    /**
     * @param string $child
     * @return array
     */
    public function asVariadic($child);

    /**
     * @param array $attr
     * @return array
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#attr
     */
    public function setAttr(array $attr);

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function addAttr($name, $value);

    /**
     * @param string $name
     * @return array|mixed
     */
    public function getAttr($name = null);

    /**
     * @param string $name
     * @return $this
     */
    public function removeAttr($name);

    /**
     * @param string|false $label
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label
     */
    public function setLabel($label);

    /**
     * @return string|false
     */
    public function getLabel();

    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label-attr
     */
    public function setLabelAttr(array $attr);

    /**
     * @return array
     */
    public function getLabelAttr();

    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function setDisabled($disabled = true);

    /**
     * @return bool
     */
    public function getDisabled();

    /**
     * @param string|false $domain
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain($domain);

    /**
     * @return string
     */
    public function getTranslationDomain();

    /**
     * @param array $constraints
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#constraints
     */
    public function setConstraints(array $constraints);

    /**
     * @param Constraint $constraint
     * @return $this
     */
    public function addConstraint(Constraint $constraint);

    /**
     * @return array
     */
    public function getConstraints();

    /**
     * @param mixed $emptyData
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#empty-data
     */
    public function setEmptyData($emptyData);

    /**
     * @return mixed
     */
    public function getEmptyData();

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message
     */
    public function setInvalidMessage($message);

    /**
     * @return string
     */
    public function getInvalidMessage();

    /**
     * @param array $parameters
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#invalid-message-parameters
     */
    public function setInvalidMessageParameters(array $parameters);

    /**
     * @return array
     */
    public function getInvalidMessageParameters();

    /**
     * @param bool $readOnly
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#read-only
     */
    public function setReadOnly($readOnly = true);

    /**
     * @return bool
     */
    public function getReadOnly();

    /**
     * @param bool $required
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#required
     */
    public function setRequired($required = true);

    /**
     * @return bool
     */
    public function getRequired();

    /**
     * @param bool $trim
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#trim
     */
    public function setTrim($trim = true);

    /**
     * @return bool
     */
    public function getTrim();

    /**
     * @param bool $autoInitialize
     * @return bool
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize($autoInitialize = true);

    /**
     * @return bool
     */
    public function getAutoInitialize();

    /**
     * @param bool $mapped
     * @return $this
     */
    public function setMapped($mapped = true);

    /**
     * @return bool
     */
    public function getMapped();

    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true);

    /**
     * @return null|bool
     */
    public function getErrorBubbling();

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data
     */
    public function setData($data);

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @param string $path
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath($path);

    /**
     * @return string
     */
    public function getPropertyPath();

    /**
     * @param string $name
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#block-name
     */
    public function setBlockName($name);

    /**
     * @return string
     */
    public function getBlockName();

    /**
     * @param bool $cascade
     * @return $this
     * @link http://symfony.com/doc/2.8/reference/forms/types/form.html#cascade-validation
     * @deprecated Since 2.8
     */
    public function setCascadeValidation($cascade = true);

    /**
     * @return bool|string
     * @deprecated Since 2.8
     */
    public function getCascadeValidation();
}
