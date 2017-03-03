<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class HiddenOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return HiddenType::class;
    }
}
