<?php

namespace steevanb\FormUtils\Field;

use Symfony\Component\Form\FormTypeInterface;

class Collection extends AbstractField
{
    use Behavior\FormTypeTrait;
    use Behavior\CascadeValidationTrait;
    use Behavior\ByReferenceTrait;

    /**
     * @param bool $allow
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#allow-add
     */
    public function setAllowAdd($allow = true)
    {
        return $this->setOption('allow_add', boolval($allow));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getAllowAdd($default = false)
    {
        return $this->getOption('allow_add', $default);
    }

    /**
     * @param $allow
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#allow-delete
     */
    public function setAllowDelete($allow = true)
    {
        return $this->setOption('allow_delete', boolval($allow));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getAllowDelete($default = false)
    {
        return $this->getOption('allow_delete', $default);
    }

    /**
     * @param bool $delete
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#delete-empty
     */
    public function setDeleteEmpty($delete = true)
    {
        return $this->setOption('delete_empty', boolval($delete));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getDeleteEmpty($default = false)
    {
        return $this->getOption('delete_empty', $default);
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
     * @param array $default
     * @return array
     */
    public function getOptions($default = array())
    {
        return $this->getOption('options', $default);
    }

    /**
     * @param bool $prototype
     * @param bool $setAllowAdd
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#prototype
     */
    public function setPrototype($prototype = true, $setAllowAdd = true)
    {
        $this->setOption('prototype', boolval($prototype));
        if ($prototype && $setAllowAdd) {
            $this->setAllowAdd();
        }

        return $this;
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getPrototype($default = true)
    {
        return $this->getOption('prototype', $default);
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
