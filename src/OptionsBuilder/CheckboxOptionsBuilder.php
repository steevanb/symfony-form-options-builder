<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CheckboxOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return CheckboxType::class;
    }

    public function setValue(mixed $value): static
    {
        return $this->setOption('value', $value);
    }

    public function getValue(): mixed
    {
        return $this->getOption('value');
    }

    public function removeValue(): static
    {
        return $this->removeOption('value');
    }
}
