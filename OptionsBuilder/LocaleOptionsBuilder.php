<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class LocaleOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    public static function getBuilderType(): string
    {
        return LocaleType::class;
    }
}
