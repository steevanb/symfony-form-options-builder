<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AlwaysEmptyTrait;
    use Behavior\AttrPlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return PasswordType::class;
    }
}
