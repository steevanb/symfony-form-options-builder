<?php

namespace steevanb\FormUtils\Field;

class Password extends AbstractField
{
    use Behavior\FormTypeTrait;
    use Behavior\AlwaysEmptyTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
}
