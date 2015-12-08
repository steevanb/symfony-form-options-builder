<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\LocaleType;

class LocaleOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return LocaleType::class;
    }
}
