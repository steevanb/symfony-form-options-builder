<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\SearchType;

class SearchOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\AttrPlaceHolderTrait;
    use Behavior\AutofocusTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return SearchType::class;
    }
}
