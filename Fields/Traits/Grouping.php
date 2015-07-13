<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Grouping
{
    use ParameterAccessors;

    /**
     * @param false|int $grouping
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#grouping
     */
    public function setGrouping($grouping)
    {
        return $this->setParameter('grouping', $grouping);
    }

    /**
     * @param null|bool $default
     * @return false|int
     */
    public function getGrouping($default = false)
    {
        return $this->getParameter('grouping', $default);
    }
}
