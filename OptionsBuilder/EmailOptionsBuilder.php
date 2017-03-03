<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class EmailOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return EmailType::class;
    }
}
