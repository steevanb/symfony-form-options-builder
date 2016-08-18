<?php

namespace steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder;

use Symfony\Component\Validator\Constraint;

interface FormOptionsBuilderInterface
{
    /**
     * @return FormOptionsBuilderInterface
     */
    public static function create();

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
     * @param string $name
     * @return $this
     */
    public function removeOption($name);

    /**
     * @return array
     */
    public function asArray();

    /**
     * @param string $action
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function setAction($action);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function getAction();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function removeAction();

    /**
     * @param bool $allow
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#allow-extra-fields
     */
    public function setAllowExtraFields($allow = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#allow-extra-fields
     */
    public function getAllowExtraFields();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#allow-extra-fields
     */
    public function removeAllowExtraFields();

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#extra-fields-message
     */
    public function setExtraFieldsMessage($message);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#extra-fields-message
     */
    public function getExtraFieldsMessage();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#extra-fields-message
     */
    public function removeExtraFieldsMessage();

    /**
     * @param array $attr
     * @return array
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#attr
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
     * @param bool $auto
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize($auto = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function getAutoInitialize();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function removeAutoInitialize();

    /**
     * @param string $name
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#block-name
     */
    public function setBlockName($name);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#block-name
     */
    public function getBlockName();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#block-name
     */
    public function removeBlockName();

    /**
     * @param bool $byReference
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#by-reference
     */
    public function setByReference($byReference = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#by-reference
     */
    public function getByReference();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#by-reference
     */
    public function removeByReference();

    /**
     * @param bool $compound
     * @return bool
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#compound
     */
    public function setCompound($compound = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#compound
     */
    public function getCompound();

    /**
     * @return bool
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#compound
     */
    public function removeCompound();

    /**
     * @param Constraint[] $constraints
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#constraints
     */
    public function setConstraints(array $constraints);

    /**
     * @param Constraint $constraint
     * @return $this
     */
    public function addConstraint(Constraint $constraint);

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#constraints
     */
    public function removeConstraints();

    /**
     * @return array|string
     */
    public function getConstraints();

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data
     */
    public function setData($data);

    /**
     * @return mixed
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data
     */
    public function getData();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data
     */
    public function removeData();

    /**
     * @param string $class
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data-class
     */
    public function setDataClass($class);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data-class
     */
    public function getDataClass();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data-class
     */
    public function removeDataClass();

    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#disabled
     */
    public function setDisabled($disabled = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#disabled
     */
    public function getDisabled();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#disabled
     */
    public function removeDisabled();

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function setEmptyData($data);

    /**
     * @return mixed
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function getEmptyData();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function removeEmptyData();

    /**
     * @param bool $errorBubbling
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling($errorBubbling = true);

    /**
     * @return bool|string
     */
    public function getErrorBubbling();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-bubbling
     */
    public function removeErrorBubbling();

    /**
     * @param array $mapping
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-mapping
     */
    public function setErrorMapping(array $mapping);

    /**
     * @return array|string
     */
    public function getErrorMapping();

    /**
     * @param bool|string $inherit
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#inherit-data
     */
    public function setInheritData($inherit = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#inherit-data
     */
    public function getInheritData();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#inherit-data
     */
    public function removeInheritData();

    /**
     * @param string $intention
     * @return $this
     * @link http://symfony.com/doc/3.0/book/forms.html#csrf-protection
     */
    public function setIntention($intention);

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/book/forms.html#csrf-protection
     */
    public function getIntention();

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message
     */
    public function setInvalidMessage($message);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message
     */
    public function getInvalidMessage();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message
     */
    public function removeInvalidMessage();

    /**
     * @param array $parameters
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function setInvalidMessageParameters(array $parameters);

    /**
     * @return array
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function getInvalidMessageParameters();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function removeInvalidMessageParameters();

    /**
     * @param string $label
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function setLabel($label);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function getLabel();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function removeLabel();

    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label-attr
     */
    public function setLabelAttr(array $attr);

    /**
     * @return array|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label-attr
     */
    public function getLabelAttr();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label-attr
     */
    public function removeLabelAttr();

    /**
     * @param string $format
     * @return $this
     * @link https://github.com/symfony/symfony-docs/pull/5642
     * @since 2.6
     */
    public function setLabelFormat($format);

    /**
     * @return string
     * @link https://github.com/symfony/symfony-docs/pull/5642
     * @since 2.6
     */
    public function getLabelFormat();

    /**
     * @return $this
     * @link https://github.com/symfony/symfony-docs/pull/5642
     * @since 2.6
     */
    public function removeLabelFormat();

    /**
     * @param bool|string $mapped
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#mapped
     */
    public function setMapped($mapped = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#mapped
     */
    public function getMapped();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#mapped
     */
    public function removeMapped();

    /**
     * @param string $path
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath($path);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#property-path
     */
    public function getPropertyPath();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#property-path
     */
    public function removePropertyPath();

    /**
     * @param bool $required
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#required
     */
    public function setRequired($required = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#required
     */
    public function getRequired();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#required
     */
    public function removeRequired();

    /**
     * @param string $domain
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain($domain);

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#translation-domain
     */
    public function getTranslationDomain();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#translation-domain
     */
    public function removeTranslationDomain();

    /**
     * @param bool $trim
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#trim
     */
    public function setTrim($trim = true);

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#trim
     */
    public function getTrim();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#trim
     */
    public function removeTrim();

    /**
     * @param null|false|array $groups
     * @return $this
     */
    public function setValidationGroups($groups);

    /**
     * @param string $group
     * @return $this
     */
    public function addValidationGroup($group);

    /**
     * @param string $group
     * @return bool
     */
    public function hasValidationGroup($group);

    /**
     * @return array|string
     */
    public function getValidationGroups();

    /**
     * @return $this
     */
    public function removeValidationGroups();
}
