<?php

namespace steevanb\FormUtils\Field\Behavior;

trait HTML5Trait
{
    use ParameterAccessors;

    /**
     * @param bool $html5
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#html5
     */
    public function setHTML5($html5 = true)
    {
        return $this->setParameter('html5', $html5);
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getHTML5($default = true)
    {
        return $this->getParameter('html5', $default);
    }
}
