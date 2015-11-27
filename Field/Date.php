<?php

namespace steevanb\FormUtils\Field;

class Date extends AbstractField
{
    use Behavior\DateTimeCommonTrait;
    use Behavior\DateTypeTrait;
    use Behavior\HTML5Trait;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';
}
