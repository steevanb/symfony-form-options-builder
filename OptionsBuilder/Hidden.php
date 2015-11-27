<?php

namespace steevanb\FormUtils\OptionsBuilder;

class Hidden extends AbstractOptionBuilder
{
    use Behavior\ErrorBubblingTrait;
    use Behavior\DataTrait;
    use Behavior\MappedTrait;
    use Behavior\PropertyPathTrait;
}
