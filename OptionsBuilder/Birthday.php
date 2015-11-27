<?php

namespace steevanb\FormUtils\OptionsBuilder;

class Birthday extends AbstractOptionBuilder
{
    use Behavior\DateTimeCommonTrait;
    use Behavior\DateTypeTrait;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';
}
