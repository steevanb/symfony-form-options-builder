<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ChoiceTypeTrait,
    OptionsBuilder\Behavior\ClassTrait
};
use Symfony\Component\Form\Extension\Core\Type\EnumType;

class EnumOptionsBuilder extends AbstractOptionsBuilder
{
    use ChoiceTypeTrait;
    use ClassTrait;

    /** @return class-string */
    public static function getBuilderType(): string
    {
        return EnumType::class;
    }
}
