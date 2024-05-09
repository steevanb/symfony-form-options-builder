<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ChoiceTypeTrait
};
use Symfony\Component\Form\Extension\Core\Type\LocaleType;

class LocaleOptionsBuilder extends AbstractOptionsBuilder
{
    use ChoiceTypeTrait;

    /** @return class-string */
    public static function getBuilderType(): string
    {
        return LocaleType::class;
    }
}
