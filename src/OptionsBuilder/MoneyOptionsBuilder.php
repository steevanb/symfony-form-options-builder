<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\GroupingTrait,
    OptionsBuilder\Behavior\ScaleTrait
};
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class MoneyOptionsBuilder extends AbstractOptionsBuilder
{
    use GroupingTrait;
    use ScaleTrait;

    public static function getBuilderType(): string
    {
        return MoneyType::class;
    }

    public function setCurrency(string $currency): static
    {
        return $this->setOption('currency', $currency);
    }

    public function disableCurrency(): static
    {
        return $this->setOption('currency', false);
    }

    /** @return string|false */
    public function getCurrency()
    {
        return $this->getOption('currency');
    }

    public function removeCurrency(): static
    {
        return $this->removeOption('currency');
    }

    public function setDivisor(int $divisor): static
    {
        return $this->setOption('divisor', $divisor);
    }

    public function getDivisor(): ?int
    {
        return $this->getOption('divisor');
    }

    public function removeDivisor(): static
    {
        return $this->removeOption('divisor');
    }
}
