<?php

namespace steevanb\FormUtils\OptionsBuilder;

class TextOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
    use Behavior\MaxLengthTrait;
}
