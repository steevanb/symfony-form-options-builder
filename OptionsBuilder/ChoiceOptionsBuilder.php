<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ChoiceOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return ChoiceType::class;
    }
}
