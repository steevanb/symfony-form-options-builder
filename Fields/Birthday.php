<?php

namespace steevanb\FormUtils\Fields;

class Birthday extends AbstractField
{
    use Traits\DateTimeCommon;
    use Traits\DateType;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';
}
