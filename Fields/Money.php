<?php

namespace steevanb\FormUtils\Fields;

class Money extends AbstractField
{
    use Traits\FormType;
    use Traits\Currency;
    use Traits\Divisor;
    use Traits\Grouping;
    use Traits\Scale;

    /**
     * @return int
     */
    public function getScale()
    {
        return $this->getParameter('scale', 2);
    }

    /**
     * @return int
     * @deprecated Since 2.7
     */
    public function getPrecision()
    {
        return $this->getParameter('precision', 2);
    }
}
