<?php

namespace steevanb\FormUtils\Field\Behavior;

trait TimeTypeTrait
{
    use ParameterAccessors;

    /**
     * @param string $widget
     * @return $this
     */
    abstract public function setWidget($widget);

    /**
     * @return string
     */
    abstract public function getWidget();

    /**
     * @param null|array $hours
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#hours
     */
    public function setHours(array $hours = null)
    {
        $this->setParameter('hours', $hours);
        if (is_array($hours)) {
            $this->setWidget('choice');
        }

        return $this;
    }

    /**
     * @return null|array
     */
    public function getHours()
    {
        return $this->getParameter('hours');
    }

    /**
     * @param null|array $minutes
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#minutes
     */
    public function setMinutes(array $minutes = null)
    {
        $this->setParameter('minutes', $minutes);
        if (is_array($minutes)) {
            $this->setWidget('choice');
        }

        return $this;
    }

    /**
     * @return null|array
     */
    public function getMinutes()
    {
        return $this->getParameter('minutes');
    }

    /**
     * @param null|array $seconds
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#seconds
     */
    public function setSeconds(array $seconds = null)
    {
        $this->setParameter('seconds', $seconds);
        if (is_array($seconds)) {
            $this->setWidget('choice');
        }

        return $this;
    }

    /**
     * @return null|array
     */
    public function getSeconds()
    {
        return $this->getParameter('seconds');
    }

    /**
     * @param bool $withMinutes
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#with-minutes
     */
    public function setWithMinutes($withMinutes = true)
    {
        return $this->setParameter('with_minutes', boolval($withMinutes));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getWithMinutes($default = true)
    {
        return $this->getParameter('with_minutes', $default);
    }

    /**
     * @param bool $withSeconds
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#with-seconds
     */
    public function setWithSeconds($withSeconds = true)
    {
        return $this->setParameter('with_seconds', boolval($withSeconds));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getWithSeconds($default = false)
    {
        return $this->getParameter('with_seconds', $default);
    }
}
