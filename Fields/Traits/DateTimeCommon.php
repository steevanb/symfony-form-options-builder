<?php

namespace steevanb\FormUtils\Fields\Traits;

trait DateTimeCommon
{
    use FormType;
    use PlaceHolder;

    /**
     * @param string $input
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#input
     */
    public function setInput($input)
    {
        return $this->setParameter('input', $input);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getInput($default = 'datetime')
    {
        return $this->getParameter('input', $default);
    }

    /**
     * @param string $timezone
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#model-timezone
     */
    public function setModelTimezone($timezone)
    {
        return $this->setParameter('model_timezone', $timezone);
    }

    /**
     * @return string
     */
    public function getModelTimezone()
    {
        return $this->getParameter('model_timezone');
    }

    /**
     * @param string $viewTimezone
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#view-timezone
     */
    public function setViewTimezone($viewTimezone)
    {
        return $this->setParameter('view_timezone', $viewTimezone);
    }

    /**
     * @return string
     */
    public function getViewTimezone()
    {
        return $this->getParameter('view_timezone');
    }

    /**
     * @param string $widget
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#widget
     */
    public function setWidget($widget)
    {
        return $this->setParameter('widget', $widget);
    }

    /**
     * @return string
     */
    public function getWidget()
    {
        return $this->getParameter('widget');
    }
}
