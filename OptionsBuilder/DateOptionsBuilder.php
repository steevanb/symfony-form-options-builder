<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;

class DateOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\DateTimeCommonTrait;
    use Behavior\DateTrait;
    use Behavior\Html5Trait;

    public const WIDGET_CHOICE = 'choice';
    public const WIDGET_TEXT = 'text';
    public const WIDGET_SINGLE_TEXT = 'single_text';

    public static function getBuilderType(): string
    {
        return DateType::class;
    }
}
