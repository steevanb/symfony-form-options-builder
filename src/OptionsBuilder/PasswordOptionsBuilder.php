<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\OptionsBuilderInterface
};
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordOptionsBuilder extends AbstractOptionsBuilder
{
    /** @return class-string */
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
