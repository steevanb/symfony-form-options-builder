<?php

namespace steevanb\FormUtils\Fields;

class Integer extends AbstractField
{
    use Traits\Grouping;
    use Traits\Scale; // since 2.7
    use Traits\Precision; // before 2.7
    use Traits\RoundingMode;
    use Traits\InvalidMessage;
    use Traits\InvalidMessageParameters;
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
}
