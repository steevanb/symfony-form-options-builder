<?php

namespace steevanb\FormUtils\OptionsBuilder;

class NumberOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\GroupingTrait;
    use Behavior\ScaleTrait;
    use Behavior\RoundingModeTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
    use Behavior\MaxLengthTrait;
}
