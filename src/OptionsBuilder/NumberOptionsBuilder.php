<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\GroupingTrait,
    OptionsBuilder\Behavior\Html5Trait,
    OptionsBuilder\Behavior\RoundingModeTrait,
    OptionsBuilder\Behavior\ScaleTrait
};
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class NumberOptionsBuilder extends AbstractOptionsBuilder
{
    use GroupingTrait;
    use ScaleTrait;
    use RoundingModeTrait;
    use Html5Trait;

    /** @return class-string */
    public static function getBuilderType(): string
    {
        return NumberType::class;
    }
}
