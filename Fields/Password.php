<?php

namespace steevanb\FormUtils\Fields;

class Password extends AbstractField
{
    use Traits\FormType;
    use Traits\AlwaysEmpty;
    use Traits\PlaceHolder;
    use Traits\Autofocus;
    use Traits\Autocomplete;
}
