<?php

namespace steevanb\FormUtils\Fields;

use Symfony\Component\Form\FormTypeInterface;

class Collection extends AbstractField
{
    use Traits\FormType;
    use Traits\CascadeValidation;

    /**
     * @param bool $allow
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#allow-add
     */
    public function setAllowAdd($allow = true)
    {
        return $this->setParameter('allow_add', boolval($allow));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getAllowAdd($default = false)
    {
        return $this->getParameter('allow_add', $default);
    }

    /**
     * @param $allow
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#allow-delete
     */
    public function setAllowDelete($allow = true)
    {
        return $this->setParameter('allow_delete', boolval($allow));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getAllowDelete($default = false)
    {
        return $this->getParameter('allow_delete', $default);
    }

    /**
     * @param bool $delete
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#delete-empty
     */
    public function setDeleteEmpty($delete = true)
    {
        return $this->setParameter('delete_empty', boolval($delete));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getDeleteEmpty($default = false)
    {
        return $this->getParameter('delete_empty', $default);
    }

    /**
     * @param array $options
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#options
     */
    public function setOptions(array $options)
    {
        return $this->setParameter('options', $options);
    }

    /**
     * @param array $default
     * @return array
     */
    public function getOptions($default = array())
    {
        return $this->getParameter('options', $default);
    }

    /**
     * @param bool $prototype
     * @param bool $setAllowAdd
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#prototype
     */
    public function setPrototype($prototype = true, $setAllowAdd = true)
    {
        $this->setParameter('prototype', boolval($prototype));
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
        return $this->getParameter('prototype', $default);
    }

    /**
     * @param string $name
     * @param bool $setAllowAdd
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#prototype-name
     */
    public function setPrototypeName($name, $setAllowAdd = true)
    {
        $this->setParameter('prototype_name', $name);
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
        return $this->setParameter('type', $type);
    }

    /**
     * @return string|FormTypeInterface
     */
    public function getType()
    {
        return $this->getParameter('type');
    }

    /**
     * @param bool $byReference
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/collection.html#by-reference
     */
    public function setByReference($byReference = true)
    {
        return $this->setParameter('by_reference', boolval($byReference));
    }

    /**
     * @param bool $default
     * @return bool
     */
    public function getByReference($default = true)
    {
        return $this->getParameter('by_reference', $default);
    }
}
