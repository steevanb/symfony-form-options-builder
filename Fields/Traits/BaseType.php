<?php

namespace steevanb\FormUtils\Fields\Traits;

trait BaseType
{
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
     * @return array
     */
    public function getAttr()
    {
        return $this->getParameter('attr');
    }

    /**
     * @param string $label
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label
     */
    public function setLabel($label)
    {
        return $this->setParameter('label', $label);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->getParameter('label');
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
     * @return bool
     */
    public function getDisabled()
    {
        return $this->getParameter('disabled', false);
    }

    /**
     * @param string $domain
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain($domain)
    {
        return $this->setParameter('translation_domain', $domain);
    }

    /**
     * @return string
     */
    public function getTranslationDomain()
    {
        return $this->getParameter('translation_domain', 'messages');
    }
}
