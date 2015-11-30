<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\OptionsBuilder\Behavior\OptionAccessorsTrait;

class Money extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    use Behavior\CurrencyTrait;
    use Behavior\DivisorTrait;
    use Behavior\GroupingTrait;
    use Behavior\ScaleTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;

    /**
     * @param null|int $default
     * @return int
     */
    public function getScale($default = 2)
    {
        return $this->getOption('scale', $default);
    }

    /**
     * @param null|int $default
     * @return int
     * @deprecated Since 2.7
     */
    public function getPrecision($default = 2)
    {
        return $this->getOption('precision', $default);
    }
}
