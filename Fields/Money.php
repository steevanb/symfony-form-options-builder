<?php

namespace steevanb\FormUtils\Fields;

class Money extends AbstractField
{
    use Traits\FormType;
    use Traits\Currency;
    use Traits\Divisor;
    use Traits\Grouping;
    use Traits\Scale;
    use Traits\PlaceHolder;
    use Traits\Autofocus;

    /**
     * @param null|int $default
     * @return int
     */
    public function getScale($default = 2)
    {
        return $this->getParameter('scale', $default);
    }

    /**
     * @param null|int $default
     * @return int
     * @deprecated Since 2.7
     */
    public function getPrecision($default = 2)
    {
        return $this->getParameter('precision', $default);
    }
}
