<?php

namespace steevanb\FormUtils\Fields;

class Hidden extends AbstractField
{
    use Traits\ErrorBubbling;
    use Traits\Data;
    use Traits\Mapped;
    use Traits\PropertyPath;
}
