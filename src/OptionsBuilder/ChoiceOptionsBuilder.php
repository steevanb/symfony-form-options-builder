<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ChoiceTypeTrait
};
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ChoiceOptionsBuilder extends AbstractOptionsBuilder
{
    use ChoiceTypeTrait;

    public static function getBuilderType(): string
    {
        return ChoiceType::class;
    }
}
