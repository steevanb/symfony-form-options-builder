<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\Behavior\ValidationGroupsTrait;
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
