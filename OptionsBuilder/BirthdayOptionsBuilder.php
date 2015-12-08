<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class BirthdayOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\DateTimeCommonTrait;
    use Behavior\DateTypeTrait;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return BirthdayType::class;
    }
}
