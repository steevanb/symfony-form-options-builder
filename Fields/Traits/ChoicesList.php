<?php

namespace steevanb\FormUtils\Fields\Traits;

use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceListInterface;

trait ChoicesList
{
    /**
     * ChoiceListInterface is deprecated since 2.7, but for use with < 2.7, continue to use it
     *
     * @param ChoiceListInterface $choices
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#choices
     */
    public function setChoicesList(ChoiceListInterface $choices)
    {
        return $this->setParameter('choices_list', $choices);
    }

    /**
     * @return null|ChoiceListInterface
     */
    public function getChoicesList()
    {
        return $this->getParameter('choices_list');
    }
}
