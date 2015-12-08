<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\SearchType;

class SearchOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return SearchType::class;
    }
}
