<?php

namespace steevanb\FormUtils\Field;

class Text extends AbstractField
{
    use Behavior\FormTypeTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
}
