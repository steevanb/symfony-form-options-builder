<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\Behavior;

abstract class AbstractOptionsBuilder implements OptionsBuilderInterface
{
    use Behavior\OptionTrait;
    use Behavior\AttrTrait;
    use Behavior\CascadeValidationTrait;
    use Behavior\BlockNameTrait;
    use Behavior\CompoundTrait;
    use Behavior\ConstraintsTrait;
    use Behavior\DataTrait;
    use Behavior\DisabledTrait;
    use Behavior\EmptyDataTrait;
    use Behavior\ErrorBubblingTrait;
    use Behavior\InheritDataTrait;
    use Behavior\InvalidMessageTrait;
    use Behavior\InvalidMessageParametersTrait;
    use Behavior\LabelTrait;
    use Behavior\LabelAttrTrait;
    use Behavior\MappedTrait;
    use Behavior\MaxLengthTrait;
    use Behavior\PropertyPathTrait;
    use Behavior\ReadOnlyTrait;
    use Behavior\RequiredTrait;
    use Behavior\TranslationDomainTrait;
    use Behavior\TrimTrait;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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
}
