<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\OptionsBuilderInterface
};
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CheckboxOptionsBuilder extends AbstractOptionsBuilder
{
    /** @return class-string */
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
