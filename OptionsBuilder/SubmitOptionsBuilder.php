<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\{
    AbstractOptionsBuilder,
    OptionsBuilderInterface
};

class SubmitOptionsBuilder extends AbstractOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return SubmitType::class;
    }

    public function setValidationGroups(array $groups): OptionsBuilderInterface
    {
        return $this->setOption('validation_groups', $groups);
    }

    public function setValidationGroupsClosure(\Closure $groups): OptionsBuilderInterface
    {
        return $this->setOption('validation_groups', $groups);
    }

    /** @return $this */
    public function addValidationGroup(string $group): OptionsBuilderInterface
    {
        $groups = $this->getValidationGroups();
        if (in_array($group, $groups) === false) {
            $groups[] = $group;
        }

        return $this->setValidationGroups($groups);
    }

    public function getValidationGroups(): array
    {
        return $this->getOption('validation_groups');
    }

    public function removeValidationGroups(): OptionsBuilderInterface
    {
        return $this->removeOption('validation_groups');
    }
}
