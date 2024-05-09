<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\DataClassTrait,
    OptionsBuilder\Behavior\OptionsBuilderInterface
};
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FileOptionsBuilder extends AbstractOptionsBuilder
{
    use DataClassTrait;

    /** @return class-string */
    public static function getBuilderType(): string
    {
        return FileType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/file.html#multiple
     */
    public function setMultiple(bool $multiple = true): OptionsBuilderInterface
    {
        return $this->setOption('multiple', $multiple);
    }

    public function getMultiple(): ?bool
    {
        return $this->getOption('multiple');
    }

    /** @return $this */
    public function removeMultiple(): OptionsBuilderInterface
    {
        return $this->removeOption('multiple');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/file.html#error-mapping
     */
    public function setErrorMapping(array $mapping): OptionsBuilderInterface
    {
        return $this->setOption('error_mapping', $mapping);
    }

    public function getErrorMapping(): ?array
    {
        return $this->getOption('error_mapping');
    }

    /** @return $this */
    public function removeErrorMapping(): OptionsBuilderInterface
    {
        return $this->removeOption('error_mapping');
    }

    public function setLabelFormat(string $format): OptionsBuilderInterface
    {
        return $this->setOption('label_format', $format);
    }

    public function getLabelFormat(): ?string
    {
        return $this->getOption('label_format');
    }

    public function removeLabelFormat(): OptionsBuilderInterface
    {
        return $this->removeOption('label_format');
    }
}
