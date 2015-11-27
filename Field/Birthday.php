<?php

namespace steevanb\FormUtils\Field;

class Birthday extends AbstractField
{
    use Behavior\DateTimeCommonTrait;
    use Behavior\DateTypeTrait;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';
}
