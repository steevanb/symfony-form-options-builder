<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait BaseTypeTrait
{
    use OptionAccessorsTrait;

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
            return $this->getOption('attr');
        }

        foreach ($this->getOption('attr', array()) as $attrName => $attrValue) {
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
        foreach ($this->getOption('attr', array()) as $attrName => $attrValue) {
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
     * @param null|array $default
     * @return array
     */
    public function getLabelAttr($default = array())
    {
        return $this->getOption('label_attr', $default);
    }

    /**
     * @param bool $disabled
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#disabled
     */
    public function setDisabled($disabled = true)
    {
        return $this->setOption('disabled', boolval($disabled));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getDisabled($default = false)
    {
        return $this->getOption('disabled', $default);
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
     * @param null|string|false $default
     * @return string
     */
    public function getTranslationDomain($default = 'messages')
    {
        return $this->getOption('translation_domain', $default);
    }
}
