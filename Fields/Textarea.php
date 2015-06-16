<?php

namespace steevanb\FormUtils\Fields;

class Textarea extends AbstractField
{
    use Traits\Attr;
    use Traits\Data;
    use Traits\Disabled;
    use Traits\EmptyData;
    use Traits\ErrorBubbling;
    use Traits\ErrorMapping;
    use Traits\Label;
    use Traits\LabelAttr;
    use Traits\Mapped;
    use Traits\ReadOnly;
    use Traits\Required;
    use Traits\Trim;
}
