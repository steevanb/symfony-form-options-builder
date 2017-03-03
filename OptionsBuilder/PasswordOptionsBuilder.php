<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\{
    OptionsBuilderInterface,
    AbstractOptionsBuilder
};

class PasswordOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return PasswordType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/password.html#always-empty
     */
    public function setAlwaysEmpty(bool $alwaysEmpty = true)
    {
        return $this->setOption('always_empty', $alwaysEmpty);
    }

    public function getAlwaysEmpty(): ?bool
    {
        return $this->getOption('always_empty');
    }

    /** @return $this */
    public function removeAlwaysEmpty(): OptionsBuilderInterface
    {
        return $this->removeOption('always_empty');
    }
}
