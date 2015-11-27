<?php

namespace steevanb\FormUtils\Field;

class Hidden extends AbstractField
{
    use Behavior\ErrorBubblingTrait;
    use Behavior\DataTrait;
    use Behavior\MappedTrait;
    use Behavior\PropertyPathTrait;
}
