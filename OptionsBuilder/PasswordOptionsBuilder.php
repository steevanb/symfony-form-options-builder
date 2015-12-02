<?php

namespace steevanb\FormUtils\OptionsBuilder;

class PasswordOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AlwaysEmptyTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
    use Behavior\MaxLengthTrait;
}
