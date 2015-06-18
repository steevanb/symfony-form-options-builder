<?php

namespace steevanb\FormUtils\Fields;

use  Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class DateTime extends AbstractField
{
    use Traits\DateTimeCommon;
    use Traits\DateType;
    use Traits\TimeType;
    use Traits\HTML5;

    const WIDGET_CHOICE = 'choice';
    const WIDGET_TEXT = 'text';
    const WIDGET_SINGLE_TEXT = 'single_text';

    /**
     * @param string $format
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#format
     */
    public function setFormat($format)
    {
        return $this->setParameter('format', $format);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getFormat($default = DateTimeType::HTML5_FORMAT)
    {
        return $this->getParameter('format', $default);
    }

    /**
     * @param int|string $format
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#date-format
     */
    public function setDateFormat($format)
    {
        return $this->setParameter('date_format', $format);
    }

    /**
     * @param null|int|string $default
     * @return int|string
     */
    public function getDateFormat($default = \IntlDateFormatter::MEDIUM)
    {
        return $this->getParameter('date_format', $default);
    }

    /**
     * @param string $widget
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#date-widget
     */
    public function setDateWidget($widget)
    {
        return $this->setParameter('date_widget', $widget);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getDateWidget($default = 'choice')
    {
        return $this->getParameter('date_widget', $default);
    }

    /**
     * @param string $widget
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#time-widget
     */
    public function setTimeWidget($widget)
    {
        return $this->setParameter('time_widget', $widget);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getTimeWidget($default = 'choice')
    {
        return $this->getParameter('time_widget', $default);
    }
}
