<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;

trait DateTimeCommonTrait
{
    use OptionAccessorsTrait;
    use PlaceHolderTrait;
    use AutofocusTrait;

    /**
     * @param string $input
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#input
     */
    public function setInput($input)
    {
        return $this->setOption('input', $input);
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->getOption('input');
    }

    /**
     * @param string $timezone
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#model-timezone
     */
    public function setModelTimezone($timezone)
    {
        return $this->setOption('model_timezone', $timezone);
    }

    /**
     * @return string
     */
    public function getModelTimezone()
    {
        return $this->getOption('model_timezone');
    }

    /**
     * @param string $viewTimezone
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#view-timezone
     */
    public function setViewTimezone($viewTimezone)
    {
        return $this->setOption('view_timezone', $viewTimezone);
    }

    /**
     * @return string
     */
    public function getViewTimezone()
    {
        return $this->getOption('view_timezone');
    }

    /**
     * @param string $widget
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#widget
     */
    public function setWidget($widget)
    {
        return $this->setOption('widget', $widget);
    }

    /**
     * @return string
     */
    public function getWidget()
    {
        return $this->getOption('widget');
    }
}
