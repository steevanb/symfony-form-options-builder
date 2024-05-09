<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class HiddenOptionsBuilder extends AbstractOptionsBuilder
{
    /** @return class-string */
    public static function getBuilderType(): string
    {
        return HiddenType::class;
    }
}
