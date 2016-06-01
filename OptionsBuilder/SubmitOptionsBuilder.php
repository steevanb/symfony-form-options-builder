<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use steevanb\SymfonyFormOptionsBuilder\Behavior\ValidationGroupsTrait;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SubmitOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AutofocusTrait;
    use ValidationGroupsTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return SubmitType::class;
    }
}
