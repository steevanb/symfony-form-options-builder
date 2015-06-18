<?php

namespace steevanb\FormUtils\Fields\Traits;

trait DateType
{
    /**
     * @param array $days
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#days
     */
    public function setDays(array $days = null)
    {
        $this->setParameter('days', $days);
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
        return $this->getParameter('days');
    }

    /**
     * @param int|string $format
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#format
     */
    public function setFormat($format)
    {
        $this->setParameter('format', $format);
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
        return $this->getParameter('format');
    }

    /**
     * @param null|array $months
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#months
     */
    public function setMonths(array $months = null)
    {
        $this->setParameter('months', $months);
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
        return $this->getParameter('months');
    }

    /**
     * @param null|array $years
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#years
     */
    public function setYears(array $years = null)
    {
        $this->setParameter('years', $years);
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
        return $this->getParameter('years');
    }
}
