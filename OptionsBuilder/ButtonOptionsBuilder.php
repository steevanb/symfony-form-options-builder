<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class ButtonOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return ButtonType::class;
    }
}
