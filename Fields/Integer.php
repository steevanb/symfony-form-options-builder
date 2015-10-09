<?php

namespace steevanb\FormUtils\Fields;

class Integer extends AbstractField
{
    use Traits\FormType;
    use Traits\Grouping;
    use Traits\Scale;
    use Traits\RoundingMode;
    use Traits\PlaceHolder;
    use Traits\Autofocus;
    use Traits\Autocomplete;
}
