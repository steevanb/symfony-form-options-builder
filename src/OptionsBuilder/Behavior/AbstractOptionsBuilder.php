<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

abstract class AbstractOptionsBuilder implements OptionsBuilderInterface
{
    protected array $options = [];

    public static function create(): static
    {
        return new static();
    }

    public function asArray(): array
    {
        return $this->options;
    }

    public function asVariadic(?string $child = null): array
    {
        return ($child === null)
            ? [static::getBuilderType(), $this->asArray()]
            : [$child, static::getBuilderType(), $this->asArray()];
    }

    public function setOption(string $name, $value): static
    {
        $this->options[$name] = $value;

        return $this;
    }

    public function getOption(string $name): mixed
    {
        return (array_key_exists($name, $this->options)) ? $this->options[$name] : null;
    }

    public function removeOption(string $name): static
    {
        if (array_key_exists($name, $this->options)) {
            unset($this->options[$name]);
        }

        return $this;
    }

    public function setAction(?string $action): static
    {
        return $this->setOption('action', $action);
    }

    public function getAction(): ?string
    {
        return $this->getOption('action');
    }

    public function removeAction(): static
    {
        return $this->removeOption('action');
    }

    public function setMethod(string $method): static
    {
        return $this->setOption('method', $method);
    }

    public function getMethod(): ?string
    {
        return $this->getOption('method');
    }

    public function removeMethod(): static
    {
        return $this->removeOption('method');
    }

    public function setAllowExtraFields(bool $allow = true): static
    {
        return $this->setOption('allow_extra_fields', $allow);
    }

    public function getAllowExtraFields(): ?bool
    {
        return $this->getOption('allow_extra_fields');
    }

    public function removeAllowExtraFields(): static
    {
        return $this->removeOption('allow_extra_fields');
    }

    public function setExtraFieldsMessage(?string $message): static
    {
        return $this->setOption('extra_fields_message', $message);
    }

    public function getExtraFieldsMessage(): ?string
    {
        return $this->getOption('extra_fields_message');
    }

    public function removeExtraFieldsMessage(): static
    {
        return $this->removeOption('extra_fields_message');
    }

    public function setAutoInitialize(bool $autoInitialize = true): static
    {
        return $this->setOption('auto_initialize', $autoInitialize);
    }

    public function getAutoInitialize(): ?bool
    {
        return $this->getOption('auto_initialize');
    }

    public function removeAutoInitialize(): static
    {
        return $this->removeOption('auto_initialize');
    }

    public function setPostMaxSizeMessage(?string $message): static
    {
        return $this->setOption('post_max_size_message', $message);
    }

    public function getPostMaxSizeMessage(): ?string
    {
        return $this->getOption('post_max_size_message');
    }

    public function removePostMaxSizeMessage(): static
    {
        return $this->removeOption('post_max_size_message');
    }

    public function setTrim(bool $trim = true): static
    {
        return $this->setOption('trim', $trim);
    }

    public function getTrim(): ?bool
    {
        return $this->getOption('trim');
    }

    public function removeTrim(): static
    {
        return $this->removeOption('trim');
    }

    public function setTranslationDomain(string $domain): static
    {
        return $this->setOption('translation_domain', $domain);
    }

    public function disableTranslationDomain(): static
    {
        return $this->setOption('translation_domain', false);
    }

    public function getTranslationDomain()
    {
        return $this->getOption('translation_domain');
    }

    public function removeTranslationDomain(): static
    {
        return $this->removeOption('translation_domain');
    }

    public function setRequired(bool $required = true): static
    {
        return $this->setOption('required', $required);
    }

    public function getRequired(): ?bool
    {
        return $this->getOption('required');
    }

    public function removeRequired(): static
    {
        return $this->removeOption('required');
    }

    public function setPropertyPath(string $path): static
    {
        return $this->setOption('property_path', $path);
    }

    public function getPropertyPath(): ?string
    {
        return $this->getOption('property_path');
    }

    public function removePropertyPath(): static
    {
        return $this->removeOption('property_path');
    }

    public function setMapped(bool $mapped = true): static
    {
        return $this->setOption('mapped', $mapped);
    }

    public function getMapped(): ?bool
    {
        return $this->getOption('mapped');
    }

    public function removeMapped(): static
    {
        return $this->removeOption('mapped');
    }

    public function setLabel(string $label): static
    {
        return $this->setOption('label', $label);
    }

    public function disableLabel(): static
    {
        return $this->setOption('label', false);
    }

    public function getLabel()
    {
        return $this->getOption('label');
    }

    public function removeLabel(): static
    {
        return $this->removeOption('label');
    }

    public function setLabelAttr(array $attr): static
    {
        return $this->setOption('label_attr', $attr);
    }

    public function getLabelAttr(): array
    {
        return $this->getOption('label_attr');
    }

    public function removeLabelAttr(): static
    {
        return $this->removeOption('label_attr');
    }

    public function setInvalidMessage(?string $message): static
    {
        return $this->setOption('invalid_message', $message);
    }

    public function getInvalidMessage(): ?string
    {
        return $this->getOption('invalid_message');
    }

    public function removeInvalidMessage(): static
    {
        return $this->removeOption('invalid_message');
    }

    public function setInvalidMessageParameters(array $parameters): static
    {
        return $this->setOption('invalid_message_parameters', $parameters);
    }

    public function getInvalidMessageParameters(): array
    {
        return $this->getOption('invalid_message_parameters');
    }

    public function removeInvalidMessageParameters(): static
    {
        return $this->removeOption('invalid_message_parameters');
    }

    public function setInheritData(bool $inherit = true): static
    {
        return $this->setOption('inherit_data', $inherit);
    }

    public function getInheritData(): ?bool
    {
        return $this->getOption('inherit_data');
    }

    public function removeInheritData(): static
    {
        return $this->removeOption('inherit_data');
    }

    public function setErrorBubbling(bool $errorBubbling = true): static
    {
        return $this->setOption('error_bubbling', $errorBubbling);
    }

    public function getErrorBubbling(): ?bool
    {
        return $this->getOption('error_bubbling');
    }

    public function removeErrorBubbling(): static
    {
        return $this->removeOption('error_bubbling');
    }

    public function setEmptyData(mixed $data): static
    {
        return $this->setOption('empty_data', $data);
    }

    public function getEmptyData()
    {
        return $this->getOption('empty_data');
    }

    public function removeEmptyData(): static
    {
        return $this->removeOption('empty_data');
    }

    public function setDisabled(bool $disabled = true): static
    {
        return $this->setOption('disabled', $disabled);
    }

    public function getDisabled(): ?bool
    {
        return $this->getOption('disabled');
    }

    public function removeDisabled(): static
    {
        return $this->removeOption('disabled');
    }

    public function setData(mixed $data): static
    {
        return $this->setOption('data', $data);
    }

    public function getData(): mixed
    {
        return $this->getOption('data');
    }

    public function removeData(): static
    {
        return $this->removeOption('data');
    }

    public function setConstraints(array $constraints): static
    {
        return $this->setOption('constraints', $constraints);
    }

    public function getConstraints(): ?array
    {
        return $this->getOption('constraints');
    }

    public function removeConstraints(): static
    {
        return $this->removeOption('constraints');
    }

    public function setCompound(bool $compound = true): static
    {
        return $this->setOption('compound', $compound);
    }

    public function getCompound(): ?bool
    {
        return $this->getOption('compound');
    }

    public function removeCompound(): static
    {
        return $this->removeOption('compound');
    }

    public function setBlockName(string $name): static
    {
        return $this->setOption('block_name', $name);
    }

    public function getBlockName(): ?string
    {
        return $this->getOption('block_name');
    }

    public function removeBlockName(): static
    {
        return $this->removeOption('block_name');
    }

    public function setAttr(array $attr): static
    {
        return $this->setOption('attr', $attr);
    }

    public function addAttr(string $name, $value): static
    {
        $attr = $this->getAttr();
        if (is_null($attr)) {
            $attr = [];
        }
        $attr[$name] = $value;
        $this->setAttr($attr);

        return $this;
    }

    public function getAttr(): ?array
    {
        return $this->getOption('attr');
    }

    public function removeAttr(): static
    {
        return $this->removeOption('attr');
    }
}
