<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\DateTimeCommonTrait,
    OptionsBuilder\Behavior\DateTrait
};
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class BirthdayOptionsBuilder extends AbstractOptionsBuilder
{
    use DateTimeCommonTrait;
    use DateTrait;

    public const WIDGET_CHOICE = 'choice';
    public const WIDGET_TEXT = 'text';
    public const WIDGET_SINGLE_TEXT = 'single_text';

    public static function getBuilderType(): string
    {
        return BirthdayType::class;
    }
}
