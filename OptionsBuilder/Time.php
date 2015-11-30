<?php

namespace steevanb\FormUtils\OptionsBuilder;

class Time extends AbstractOptionsBuilder
{
    use Behavior\DateTimeCommonTrait;
    use Behavior\TimeTypeTrait;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';
}
