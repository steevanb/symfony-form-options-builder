<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TextareaOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return TextareaType::class;
    }
}
