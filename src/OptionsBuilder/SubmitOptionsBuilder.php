<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SubmitOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return SubmitType::class;
    }

    /** @param array<string>|\Closure $groups */
    public function setValidationGroups(array|\Closure $groups): static
    {
        return $this->setOption('validation_groups', $groups);
    }

    /** @return array<string>|\Closure|null */
    public function getValidationGroups(): array|\Closure|null
    {
        return $this->getOption('validation_groups');
    }

    public function removeValidationGroups(): static
    {
        return $this->removeOption('validation_groups');
    }
}
