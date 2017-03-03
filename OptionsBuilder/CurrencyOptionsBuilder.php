<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class CurrencyOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    public static function getBuilderType(): string
    {
        return CurrencyType::class;
    }
}
