<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ScaleTrait,
    OptionsBuilder\Behavior\OptionsBuilderInterface
};
use Symfony\Component\Form\Extension\Core\Type\PercentType;

class PercentOptionsBuilder extends AbstractOptionsBuilder
{
    use ScaleTrait;

    public const TYPE_FRACTIONAL = 'fractional';
    public const TYPE_INTEGER = 'integer';

    /** @return class-string */
    public static function getBuilderType(): string
    {
        return PercentType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/percent.html#type
     */
    public function setType(string $type): OptionsBuilderInterface
    {
        return $this->setOption('type', $type);
    }

    public function getType(): ?string
    {
        return $this->getOption('type');
    }

    /** @return $this */
    public function removeType(): OptionsBuilderInterface
    {
        return $this->removeOption('type');
    }
}
