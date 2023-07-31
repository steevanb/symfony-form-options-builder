<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class ButtonOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return ButtonType::class;
    }
}
