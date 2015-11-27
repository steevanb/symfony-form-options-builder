<?php

namespace steevanb\FormUtils\Field;

class Email extends AbstractField
{
    use Behavior\FormTypeTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
}
