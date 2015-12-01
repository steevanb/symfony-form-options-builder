<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\OptionsBuilder\Behavior\OptionAccessorsTrait;

class MoneyOptionsBuilder extends AbstractOptionsBuilder
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
     * @return int
     */
    public function getScale()
    {
        return $this->getOption('scale');
    }

    /**
     * @return int
     * @deprecated Since 2.7
     */
    public function getPrecision()
    {
        return $this->getOption('precision');
    }
}
