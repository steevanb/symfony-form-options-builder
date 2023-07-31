<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\DataClassTrait
};
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FileOptionsBuilder extends AbstractOptionsBuilder
{
    use DataClassTrait;

    public static function getBuilderType(): string
    {
        return FileType::class;
    }

    public function setMultiple(bool $multiple = true): static
    {
        return $this->setOption('multiple', $multiple);
    }

    public function getMultiple(): ?bool
    {
        return $this->getOption('multiple');
    }

    public function removeMultiple(): static
    {
        return $this->removeOption('multiple');
    }

    /** @param array<string, string> $mapping */
    public function setErrorMapping(array $mapping): static
    {
        return $this->setOption('error_mapping', $mapping);
    }

    /** @return array<string, string>|null */
    public function getErrorMapping(): ?array
    {
        return $this->getOption('error_mapping');
    }

    public function removeErrorMapping(): static
    {
        return $this->removeOption('error_mapping');
    }

    public function setLabelFormat(string $format): static
    {
        return $this->setOption('label_format', $format);
    }

    public function getLabelFormat(): ?string
    {
        return $this->getOption('label_format');
    }

    public function removeLabelFormat(): static
    {
        return $this->removeOption('label_format');
    }
}
