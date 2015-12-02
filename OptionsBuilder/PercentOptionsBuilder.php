<?php

namespace steevanb\FormUtils\OptionsBuilder;

use steevanb\FormUtils\OptionsBuilder\Behavior\OptionAccessorsTrait;

class PercentOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    use Behavior\ScaleTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;
    use Behavior\MaxLengthTrait;

    const TYPE_FRACTIONAL = 'fractional';
    const TYPE_INTEGER = 'integer';

    /**
     * @param string $type Use self::TYPE_XXX
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/percent.html#type
     */
    public function setType($type)
    {
        return $this->setOption('type', $type);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getOption('type');
    }
}
