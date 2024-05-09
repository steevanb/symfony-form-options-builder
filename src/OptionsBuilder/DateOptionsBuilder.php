<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\DateTimeCommonTrait,
    OptionsBuilder\Behavior\DateTrait,
    OptionsBuilder\Behavior\Html5Trait
};
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DateOptionsBuilder extends AbstractOptionsBuilder
{
    use DateTimeCommonTrait;
    use DateTrait;
    use Html5Trait;

    public const WIDGET_CHOICE = 'choice';
    public const WIDGET_TEXT = 'text';
    public const WIDGET_SINGLE_TEXT = 'single_text';

    /** @return class-string */
    public static function getBuilderType(): string
    {
        return DateType::class;
    }
}
