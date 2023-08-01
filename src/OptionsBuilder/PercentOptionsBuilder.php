<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ScaleTrait
};
use Symfony\Component\Form\Extension\Core\Type\PercentType;

class PercentOptionsBuilder extends AbstractOptionsBuilder
{
    use ScaleTrait;

    public const TYPE_FRACTIONAL = 'fractional';
    public const TYPE_INTEGER = 'integer';

    public static function getBuilderType(): string
    {
        return PercentType::class;
    }

    public function setType(string $type): static
    {
        return $this->setOption('type', $type);
    }

    public function getType(): ?string
    {
        return $this->getOption('type');
    }

    public function removeType(): static
    {
        return $this->removeOption('type');
    }
}
