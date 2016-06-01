<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class ButtonOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AutofocusTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return ButtonType::class;
    }
}
