<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\TimezoneType;

class TimezoneOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return TimezoneType::class;
    }
}
