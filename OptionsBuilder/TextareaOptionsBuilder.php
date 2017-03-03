<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class TextareaOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return TextareaType::class;
    }
}
