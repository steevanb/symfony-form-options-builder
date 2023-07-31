<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\DateTimeCommonTrait,
    OptionsBuilder\Behavior\Html5Trait,
    OptionsBuilder\Behavior\TimeTrait
};
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class TimeOptionsBuilder extends AbstractOptionsBuilder
{
    use DateTimeCommonTrait;
    use TimeTrait;
    use Html5Trait;

    public const WIDGET_CHOICE = 'choice';
    public const WIDGET_TEXT = 'text';
    public const WIDGET_SINGLE_TEXT = 'single_text';

    public static function getBuilderType(): string
    {
        return TimeType::class;
    }
}
