<?php

namespace steevanb\FormUtils\Field;

class Percent extends AbstractField
{
    use Behavior\FormTypeTrait;
    use Behavior\ScaleTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;

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
     * @param null|string $default
     * @return string
     */
    public function getType($default = self::TYPE_FRACTIONAL)
    {
        return $this->getOption('type', $default);
    }
}
