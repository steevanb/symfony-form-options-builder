<?php

namespace steevanb\FormUtils\OptionsBuilder\Behavior;

use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

trait DateTypeTrait
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
     * @param array $days
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#days
     */
    public function setDays(array $days = null)
    {
        $this->setOption('days', $days);
        if (is_array($days)) {
            $this->setWidget('choice');
        }

        return $this;
    }

    /**
     * @return null|array
     */
    public function getDays()
    {
        return $this->getOption('days');
    }

    /**
     * @param int|string $format
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#format
     */
    public function setFormat($format)
    {
        $this->setOption('format', $format);
        if (is_string($format)) {
            $this->setWidget('single_text');
        }

        return $this;
    }

    /**
     * @return null|int|string
     */
    public function getFormat()
    {
        return $this->getOption('format');
    }

    /**
     * @param null|array $months
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#months
     */
    public function setMonths(array $months = null)
    {
        $this->setOption('months', $months);
        if (is_array($months)) {
            $this->setWidget('choice');
        }

        return $this;
    }

    /**
     * @return null|array
     */
    public function getMonths()
    {
        return $this->getOption('months');
    }

    /**
     * @param null|array $years
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#years
     */
    public function setYears(array $years = null)
    {
        $this->setOption('years', $years);
        if (is_array($years)) {
            $this->setWidget('choice');
        }

        return $this;
    }

    /**
     * @return null|array
     */
    public function getYears()
    {
        return $this->getOption('years');
    }
}
