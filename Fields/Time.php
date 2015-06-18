<?php

namespace steevanb\FormUtils\Fields;

class Time extends AbstractField
{
    use Traits\DateTimeCommon;
    use Traits\TimeType;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';
}
