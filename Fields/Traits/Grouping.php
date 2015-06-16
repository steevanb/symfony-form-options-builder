<?php

namespace steevanb\FormUtils\Fields\Traits;

trait Grouping
{
    /**
     * @param false|int $grouping
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#grouping
     */
    public function setGrouping($grouping)
    {
        $this->parameters['grouping'] = $grouping;

        return $this;
    }
}
