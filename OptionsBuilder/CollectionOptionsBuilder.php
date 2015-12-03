<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\Behavior\ByReferenceTrait;
use steevanb\FormUtils\Behavior\OptionAccessorsTrait;
use Symfony\Component\Form\FormTypeInterface;

class CollectionOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    use ByReferenceTrait;

    /**
     * @param bool $allow
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#allow-add
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
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#allow-delete
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
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#delete-empty
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
     * @param array $options
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#options
     */
    public function setOptions(array $options)
    {
        return $this->setOption('options', $options);
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->getOption('options');
    }

    /**
     * @param bool $prototype
     * @param bool $setAllowAdd
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#prototype
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
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#prototype-name
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
     * @param string|FormTypeInterface $type
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#type
     */
    public function setType($type)
    {
        return $this->setOption('type', $type);
    }

    /**
     * @return string|FormTypeInterface
     */
    public function getType()
    {
        return $this->getOption('type');
    }
}
