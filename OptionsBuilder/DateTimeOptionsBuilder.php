<?php

namespace steevanb\FormUtils\OptionsBuilder;

class DateTimeOptionsBuilder extends AbstractOptionsBuilder
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
     * @return string
     */
    public function getFormat()
    {
        return $this->getOption('format');
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
     * @return int|string
     */
    public function getDateFormat()
    {
        return $this->getOption('date_format');
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
     * @return string
     */
    public function getDateWidget()
    {
        return $this->getOption('date_widget');
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
     * @return string
     */
    public function getTimeWidget()
    {
        return $this->getOption('time_widget');
    }
}
