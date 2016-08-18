<?php

namespace steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder;

use steevanb\SymfonyFormOptionsBuilder\Behavior;

class FormOptionsBuilder implements FormOptionsBuilderInterface
{
    use Behavior\OptionTrait;
    use Behavior\AllowExtraFieldsTrait;
    use Behavior\ExtraFieldsMessageTrait;
    use Behavior\AttrTrait;
    use Behavior\BlockNameTrait;
    use Behavior\ByReferenceTrait;
    use Behavior\CompoundTrait;
    use Behavior\ConstraintsTrait;
    use Behavior\DataTrait;
    use Behavior\DataClassTrait;
    use Behavior\DisabledTrait;
    use Behavior\EmptyDataTrait;
    use Behavior\ErrorBubblingTrait;
    use Behavior\InheritDataTrait;
    use Behavior\InvalidMessageTrait;
    use Behavior\InvalidMessageParametersTrait;
    use Behavior\LabelTrait;
    use Behavior\LabelAttrTrait;
    use Behavior\LabelFormatTrait;
    use Behavior\MappedTrait;
    use Behavior\PropertyPathTrait;
    use Behavior\RequiredTrait;
    use Behavior\TranslationDomainTrait;
    use Behavior\TrimTrait;
    use Behavior\ValidationGroupsTrait;

    /**
     * @return $this
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
     * @param string $action
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function setAction($action)
    {
        return $this->setOption('action', $action);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function getAction()
    {
        return $this->getOption('action');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function removeAction()
    {
        return $this->removeOption('action');
    }

    /**
     * @param bool $auto
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize($auto = true)
    {
        return $this->setOption('auto_initialize', $auto);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function getAutoInitialize()
    {
        return $this->getOption('auto_initialize');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function removeAutoInitialize()
    {
        return $this->removeOption('auto_initialize');
    }

    /**
     * @param array $mapping
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-mapping
     */
    public function setErrorMapping(array $mapping)
    {
        return $this->setOption('error_mapping', $mapping);
    }

    /**
     * @return array|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-mapping
     */
    public function getErrorMapping()
    {
        return $this->getOption('error_mapping');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-mapping
     */
    public function removeErrorMapping()
    {
        return $this->removeOption('error_mapping');
    }

    /**
     * @param string $intention
     * @return $this
     * @link http://symfony.com/doc/3.0/book/forms.html#csrf-protection
     */
    public function setIntention($intention)
    {
        return $this->setOption('intention', $intention);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/book/forms.html#csrf-protection
     */
    public function getIntention()
    {
        return $this->getOption('intention');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/book/forms.html#csrf-protection
     */
    public function removeIntention()
    {
        return $this->removeOption('intention');
    }
}
