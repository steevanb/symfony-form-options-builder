<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

trait TimeTypeTrait
{
    use OptionAccessorsTrait;

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
        $this->setOption('hours', $hours);
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
        return $this->getOption('hours');
    }

    /**
     * @param null|array $minutes
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#minutes
     */
    public function setMinutes(array $minutes = null)
    {
        $this->setOption('minutes', $minutes);
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
        return $this->getOption('minutes');
    }

    /**
     * @param null|array $seconds
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#seconds
     */
    public function setSeconds(array $seconds = null)
    {
        $this->setOption('seconds', $seconds);
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
        return $this->getOption('seconds');
    }

    /**
     * @param bool $withMinutes
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#with-minutes
     */
    public function setWithMinutes($withMinutes = true)
    {
        return $this->setOption('with_minutes', boolval($withMinutes));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getWithMinutes($default = true)
    {
        return $this->getOption('with_minutes', $default);
    }

    /**
     * @param bool $withSeconds
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/time.html#with-seconds
     */
    public function setWithSeconds($withSeconds = true)
    {
        return $this->setOption('with_seconds', boolval($withSeconds));
    }

    /**
     * @param null|bool $default
     * @return bool
     */
    public function getWithSeconds($default = false)
    {
        return $this->getOption('with_seconds', $default);
    }
}
