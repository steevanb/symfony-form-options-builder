<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\SearchType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class SearchOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return SearchType::class;
    }
}
