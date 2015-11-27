<?php

namespace steevanb\FormUtils\OptionsBuilder;

class Password extends AbstractOptionBuilder
{
    use Behavior\FormTypeTrait;
    use Behavior\AlwaysEmptyTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
}
