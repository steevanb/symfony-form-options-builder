<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait TranslationDomainTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $domain
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain($domain)
    {
        return $this->setOption('translation_domain', $domain);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain
     */
    public function getTranslationDomain()
    {
        return $this->getOption('translation_domain');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#translation-domain
     */
    public function removeTranslationDomain()
    {
        return $this->removeOption('translation_domain');
    }
}
