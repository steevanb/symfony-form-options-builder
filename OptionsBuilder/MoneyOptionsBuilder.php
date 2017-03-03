<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\OptionsBuilderInterface
};

class MoneyOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\GroupingTrait;
    use Behavior\ScaleTrait;

    public static function getBuilderType(): string
    {
        return MoneyType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/money.html#currency
     */
    public function setCurrency(string $currency): OptionsBuilderInterface
    {
        return $this->setOption('currency', $currency);
    }

    /** @return $this */
    public function disableCurrency()
    {
        return $this->setOption('currency', false);
    }

    /** @return string|false */
    public function getCurrency()
    {
        return $this->getOption('currency');
    }

    /** @return $this */
    public function removeCurrency(): OptionsBuilderInterface
    {
        return $this->removeOption('currency');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/money.html#divisor
     */
    public function setDivisor(int $divisor): OptionsBuilderInterface
    {
        return $this->setOption('divisor', $divisor);
    }

    public function getDivisor(): ?int
    {
        return $this->getOption('divisor');
    }

    /** @return $this */
    public function removeDivisor(): OptionsBuilderInterface
    {
        return $this->removeOption('divisor');
    }
}
