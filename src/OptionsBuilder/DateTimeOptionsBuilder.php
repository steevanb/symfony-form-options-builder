<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\DateTimeCommonTrait,
    OptionsBuilder\Behavior\DateTrait,
    OptionsBuilder\Behavior\Html5Trait,
    OptionsBuilder\Behavior\TimeTrait
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

    public function setDateFormat(string $format): static
    {
        return $this->setOption('date_format', $format);
    }

    public function setDateFormatCode(int $format): static
    {
        return $this->setOption('date_format', $format);
    }

    public function getDateFormat(): string|int|null
    {
        return $this->getOption('date_format');
    }

    public function removeDateFormat(): static
    {
        return $this->removeOption('date_format');
    }

    public function setDateWidget(string $widget): static
    {
        return $this->setOption('date_widget', $widget);
    }

    public function getDateWidget(): ?string
    {
        return $this->getOption('date_widget');
    }

    public function removeDateWidget(): static
    {
        return $this->removeOption('date_widget');
    }

    public function setTimeWidget(string $widget): static
    {
        return $this->setOption('time_widget', $widget);
    }

    public function getTimeWidget(): ?string
    {
        return $this->getOption('time_widget');
    }

    public function removeTimeWidget(): static
    {
        return $this->removeOption('time_widget');
    }
}
