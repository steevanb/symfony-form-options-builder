<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;


use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;
use Symfony\Component\Form\Extension\Core\Type\PercentType;

class PercentOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    use Behavior\ScaleTrait;
    use Behavior\AttrPlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;

    const TYPE_FRACTIONAL = 'fractional';
    const TYPE_INTEGER = 'integer';

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return PercentType::class;
    }

    /**
     * @param string $type Use self::TYPE_XXX
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/percent.html#type
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
