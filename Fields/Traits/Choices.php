<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Choices
{
    /**
     * @param array $choices
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/choice.html#choices
     */
    public function setChoices(array $choices)
    {
        return $this->setParameter('choices', $choices);
    }

    /**
     * @return array
     */
    public function getChoices()
    {
        return $this->getParameter('choices', array());
    }
}
