<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\SearchType;

class SearchOptionsBuilder extends AbstractOptionsBuilder
{
    /** @return class-string */
    public static function getBuilderType(): string
    {
        return SearchType::class;
    }
}
