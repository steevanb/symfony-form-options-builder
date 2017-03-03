<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

/**
 * Use it to fix disabled configuration bug :
 * If all your fields are disabled, your browser doesn't send anything
 * In this case, Symfony understand that you want to delete element, instead of do not modify it.
 * You have to call form_widget(form.foo) in your template to write this input in HTML
 */
class FixDisabledBugOptionsBuilder extends HiddenOptionsBuilder
{
    public function __construct()
    {
        $this
            ->setMapped(false)
            ->disableLabel()
            ->disableTranslationDomain();
    }
}
