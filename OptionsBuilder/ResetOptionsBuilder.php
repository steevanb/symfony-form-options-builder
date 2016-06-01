<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\ResetType;

class ResetOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AutofocusTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return ResetType::class;
    }
}
