<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class HiddenOptionsBuilder extends AbstractOptionsBuilder
{
    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return HiddenType::class;
    }
}
