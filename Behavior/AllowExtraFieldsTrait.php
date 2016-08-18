<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait AllowExtraFieldsTrait
{
    use OptionAccessorsTrait;

    /**
     * @param bool $allow
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#allow-extra-fields
     */
    public function setAllowExtraFields($allow = true)
    {
        return $this->setOption('allow_extra_fields', $allow);
    }

    /**
     * @return bool|string
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#allow-extra-fields
     */
    public function getAllowExtraFields()
    {
        return $this->getOption('allow_extra_fields');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#allow-extra-fields
     */
    public function removeAllowExtraFields()
    {
        return $this->removeOption('allow_extra_fields');
    }
}
