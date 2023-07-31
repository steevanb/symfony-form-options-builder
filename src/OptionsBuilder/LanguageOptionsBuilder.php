<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ChoiceTypeTrait
};
use Symfony\Component\Form\Extension\Core\Type\LanguageType;

class LanguageOptionsBuilder extends AbstractOptionsBuilder
{
    use ChoiceTypeTrait;

    public static function getBuilderType(): string
    {
        return LanguageType::class;
    }
}
