<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use steevanb\SymfonyFormOptionsBuilder\Behavior\ByReferenceTrait;
use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormTypeInterface;

class CollectionOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    use ByReferenceTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return CollectionType::class;
    }

    /**
     * @param bool $allow
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#allow-add
     */
    public function setAllowAdd($allow = true)
    {
        return $this->setOption('allow_add', $allow);
    }

    /**
     * @return bool
     */
    public function getAllowAdd()
    {
        return $this->getOption('allow_add');
    }

    /**
     * @param $allow
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#allow-delete
     */
    public function setAllowDelete($allow = true)
    {
        return $this->setOption('allow_delete', $allow);
    }

    /**
     * @return bool
     */
    public function getAllowDelete()
    {
        return $this->getOption('allow_delete');
    }

    /**
     * @param bool $delete
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#delete-empty
     */
    public function setDeleteEmpty($delete = true)
    {
        return $this->setOption('delete_empty', $delete);
    }

    /**
     * @return bool
     */
    public function getDeleteEmpty()
    {
        return $this->getOption('delete_empty');
    }

    /**
     * @param bool $prototype
     * @param bool $setAllowAdd
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#prototype
     */
    public function setPrototype($prototype = true, $setAllowAdd = true)
    {
        $this->setOption('prototype', $prototype);
        if ($prototype && $setAllowAdd) {
            $this->setAllowAdd();
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function getPrototype()
    {
        return $this->getOption('prototype');
    }

    /**
     * @param string $name
     * @param bool $setAllowAdd
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#prototype-name
     */
    public function setPrototypeName($name, $setAllowAdd = true)
    {
        $this->setOption('prototype_name', $name);
        if ($setAllowAdd) {
            $this->setPrototype();
        }

        return $this;
    }

    /**
     * @param string $type
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-type
     * @since 2.8
     */
    public function setEntryType($type)
    {
        return $this->setOption('entry_type', $type);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-type
     * @since 2.8
     */
    public function getEntryType()
    {
        return $this->getOption('entry_type');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-type
     * @since 2.8
     */
    public function removeEntryType()
    {
        return $this->removeOption('entry_type');
    }

    /**
     * @param array $options
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-options
     * @since 2.8
     */
    public function setEntryOptions(array $options)
    {
        return $this->setOption('entry_options', $options);
    }

    /**
     * @return array|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-options
     * @since 2.8
     */
    public function getEntryOptions()
    {
        return $this->getOption('entry_options');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/collection.html#entry-options
     * @since 2.8
     */
    public function removeEntryOotions()
    {
        return $this->removeOption('entry_options');
    }
}
