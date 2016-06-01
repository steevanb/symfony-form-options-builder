<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\CurrencyType;

class CurrencyOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return CurrencyType::class;
    }
}
