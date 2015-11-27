<?php

namespace steevanb\FormUtils\Field;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class DateTime extends AbstractField
{
    use Behavior\DateTimeCommonTrait;
    use Behavior\DateTypeTrait;
    use Behavior\TimeTypeTrait;
    use Behavior\HTML5Trait;

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
        return $this->setOption('format', $format);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getFormat($default = DateTimeType::HTML5_FORMAT)
    {
        return $this->getOption('format', $default);
    }

    /**
     * @param int|string $format
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#date-format
     */
    public function setDateFormat($format)
    {
        return $this->setOption('date_format', $format);
    }

    /**
     * @param null|int|string $default
     * @return int|string
     */
    public function getDateFormat($default = \IntlDateFormatter::MEDIUM)
    {
        return $this->getOption('date_format', $default);
    }

    /**
     * @param string $widget
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#date-widget
     */
    public function setDateWidget($widget)
    {
        return $this->setOption('date_widget', $widget);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getDateWidget($default = 'choice')
    {
        return $this->getOption('date_widget', $default);
    }

    /**
     * @param string $widget
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#time-widget
     */
    public function setTimeWidget($widget)
    {
        return $this->setOption('time_widget', $widget);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getTimeWidget($default = 'choice')
    {
        return $this->getOption('time_widget', $default);
    }
}
