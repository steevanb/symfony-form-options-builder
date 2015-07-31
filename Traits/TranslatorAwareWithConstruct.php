<?php

namespace steevanb\FormUtils\Traits;

use Symfony\Component\Translation\TranslatorInterface;

trait TranslatorAwareWithConstruct
{
    use TranslatorAware;

    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->setTranslator($translator);
    }
}
