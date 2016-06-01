<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\CountryType;

class CountryOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return CountryType::class;
    }
}
