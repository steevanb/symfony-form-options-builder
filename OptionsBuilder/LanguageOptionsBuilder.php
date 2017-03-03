<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class LanguageOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;

    public static function getBuilderType(): string
    {
        return LanguageType::class;
    }
}
