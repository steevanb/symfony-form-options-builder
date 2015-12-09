<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class TextOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AttrPlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return TextType::class;
    }
}
