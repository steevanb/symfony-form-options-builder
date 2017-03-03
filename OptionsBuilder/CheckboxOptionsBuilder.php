<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\{
    OptionsBuilderInterface,
    AbstractOptionsBuilder
};

class CheckboxOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return CheckboxType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/checkbox.html#value
     */
    public function setValue($value): OptionsBuilderInterface
    {
        return $this->setOption('value', $value);
    }

    public function getValue()
    {
        return $this->getOption('value');
    }

    /** @return $this */
    public function removeValue(): OptionsBuilderInterface
    {
        return $this->removeOption('value');
    }
}
