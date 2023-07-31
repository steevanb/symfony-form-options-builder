<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\DateTimeCommonTrait,
    OptionsBuilder\Behavior\DateTrait,
    OptionsBuilder\Behavior\Html5Trait,
    OptionsBuilder\Behavior\TimeTrait,
    OptionsBuilder\Behavior\OptionsBuilderInterface
};
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class DateTimeOptionsBuilder extends AbstractOptionsBuilder
{
    use DateTimeCommonTrait;
    use DateTrait;
    use TimeTrait;
    use Html5Trait;

    public const WIDGET_CHOICE = 'choice';
    public const WIDGET_TEXT = 'text';
    public const WIDGET_SINGLE_TEXT = 'single_text';

    public static function getBuilderType(): string
    {
        return DateTimeType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#date-format
     */
    public function setDateFormat(string $format): OptionsBuilderInterface
    {
        return $this->setOption('date_format', $format);
    }

    /** @return $this */
    public function setDateFormatCode(int $format): OptionsBuilderInterface
    {
        return $this->setOption('date_format', $format);
    }

    /** @return int|string|null */
    public function getDateFormat()
    {
        return $this->getOption('date_format');
    }

    /** @return $this */
    public function removeDateFormat(): OptionsBuilderInterface
    {
        return $this->removeOption('date_format');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#date-widget
     */
    public function setDateWidget(string $widget): OptionsBuilderInterface
    {
        return $this->setOption('date_widget', $widget);
    }

    public function getDateWidget(): ?string
    {
        return $this->getOption('date_widget');
    }

    /** @return $this */
    public function removeDateWidget(): OptionsBuilderInterface
    {
        return $this->removeOption('date_widget');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/datetime.html#time-widget
     */
    public function setTimeWidget(string $widget): OptionsBuilderInterface
    {
        return $this->setOption('time_widget', $widget);
    }

    public function getTimeWidget(): ?string
    {
        return $this->getOption('time_widget');
    }

    /** @return $this */
    public function removeTimeWidget()
    {
        return $this->removeOption('time_widget');
    }
}
