<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\ResetType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class ResetOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return ResetType::class;
    }
}
