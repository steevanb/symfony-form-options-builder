<?php

namespace steevanb\FormUtils\Field\Behavior;

use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceListInterface;

trait ChoicesListTrait
{
    use OptionAccessorsTrait;

    /**
     * ChoiceListInterface is deprecated since 2.7, but for use with < 2.7, continue to use it
     *
     * @param ChoiceListInterface $choices
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#choices
     */
    public function setChoicesList(ChoiceListInterface $choices)
    {
        return $this->setOption('choices_list', $choices);
    }

    /**
     * @return null|ChoiceListInterface
     */
    public function getChoicesList()
    {
        return $this->getOption('choices_list');
    }
}
