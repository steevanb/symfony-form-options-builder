<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EmailOptionsBuilder extends AbstractOptionsBuilder
{
    /** @return class-string */
    public static function getBuilderType(): string
    {
        return EmailType::class;
    }
}
