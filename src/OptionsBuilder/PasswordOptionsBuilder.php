<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return PasswordType::class;
    }

    public function setAlwaysEmpty(bool $alwaysEmpty = true):static
    {
        return $this->setOption('always_empty', $alwaysEmpty);
    }

    public function getAlwaysEmpty(): ?bool
    {
        return $this->getOption('always_empty');
    }

    public function removeAlwaysEmpty(): static
    {
        return $this->removeOption('always_empty');
    }
}
