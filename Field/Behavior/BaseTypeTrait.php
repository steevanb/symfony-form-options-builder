<?php

namespace steevanb\FormUtils\Field\Behavior;

trait BaseTypeTrait
{
    use ParameterAccessors;

    /**
     * @param array $attr
     * @return array
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#attr
     */
    public function setAttr(array $attr)
    {
        return $this->setParameter('attr', $attr);
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function addAttr($name, $value)
    {
        $attr = $this->getAttr();
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
        if (empty($name)) {
            return $this->getParameter('attr');
        }

        foreach ($this->getParameter('attr', array()) as $attrName => $attrValue) {
            if ($attrName == $name) {
                return $attrValue;
            }
        }

        return null;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function removeAttr($name)
    {
        $attr = array();
        foreach ($this->getParameter('attr', array()) as $attrName => $attrValue) {
            if ($attrName != $name) {
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
        return $this->setParameter('label', $label);
    }

    /**
     * @return string|false
     */
    public function getLabel()
    {
        return $this->getParameter('label');
    }

    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label-attr
     */
    public function setLabelAttr(array $attr)
    {
        return $this->setParameter('label_attr', $attr);
    }

    /**
     * @param null|array $default
     * @return array
     */
    public function getLabelAttr($default = array())
    {
        return $this->getParameter('label_attr', $default);
    }

    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function setDisabled($disabled = true)
    {
        return $this->setParameter('disabled', boolval($disabled));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getDisabled($default = false)
    {
        return $this->getParameter('disabled', $default);
    }

    /**
     * @param string|false $domain
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain($domain)
    {
        return $this->setParameter('translation_domain', $domain);
    }

    /**
     * @param null|string|false $default
     * @return string
     */
    public function getTranslationDomain($default = 'messages')
    {
        return $this->getParameter('translation_domain', $default);
    }
}
