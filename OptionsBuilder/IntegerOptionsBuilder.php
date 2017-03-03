<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class IntegerOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\GroupingTrait;
    use Behavior\ScaleTrait;
    use Behavior\RoundingModeTrait;

    public static function getBuilderType(): string
    {
        return IntegerType::class;
    }
}
