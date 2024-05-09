<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\GroupingTrait,
    OptionsBuilder\Behavior\RoundingModeTrait,
    OptionsBuilder\Behavior\ScaleTrait
};
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class IntegerOptionsBuilder extends AbstractOptionsBuilder
{
    use GroupingTrait;
    use ScaleTrait;
    use RoundingModeTrait;

    /** @return class-string */
    public static function getBuilderType(): string
    {
        return IntegerType::class;
    }
}
