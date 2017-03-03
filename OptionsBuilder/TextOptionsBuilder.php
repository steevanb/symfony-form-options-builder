<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class TextOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return TextType::class;
    }
}
