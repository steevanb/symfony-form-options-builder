<?php

namespace steevanb\FormUtils\OptionsBuilder;

class Password extends AbstractOptionsBuilder
{
    use Behavior\AlwaysEmptyTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
}
