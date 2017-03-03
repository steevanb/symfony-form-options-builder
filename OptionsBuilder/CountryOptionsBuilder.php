<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\CountryType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class CountryOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    public static function getBuilderType(): string
    {
        return CountryType::class;
    }
}
