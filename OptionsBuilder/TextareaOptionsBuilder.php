<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TextareaOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AttrPlaceHolderTrait;
    use Behavior\AutofocusTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return TextareaType::class;
    }
}
