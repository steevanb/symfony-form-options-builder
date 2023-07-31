<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use Symfony\Component\Validator\Constraint;

abstract class AbstractOptionsBuilder implements OptionsBuilderInterface
{
    protected $options = [];

    /** @return $this */
    public static function create(): OptionsBuilderInterface
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

    public function setOption(string $name, $value): OptionsBuilderInterface
    {
        $this->options[$name] = $value;

        return $this;
    }

    public function getOption(string $name)
    {
        return (array_key_exists($name, $this->options)) ? $this->options[$name] : null;
    }

    public function removeOption(string $name): OptionsBuilderInterface
    {
        if (array_key_exists($name, $this->options)) {
            unset($this->options[$name]);
        }

        return $this;
    }

    public function setAction(?string $action): OptionsBuilderInterface
    {
        return $this->setOption('action', $action);
    }

    public function getAction(): ?string
    {
        return $this->getOption('action');
    }

    public function removeAction(): OptionsBuilderInterface
    {
        return $this->removeOption('action');
    }

    public function setMethod(string $method): OptionsBuilderInterface
    {
        return $this->setOption('method', $method);
    }

    public function getMethod(): ?string
    {
        return $this->getOption('method');
    }

    public function removeMethod(): OptionsBuilderInterface
    {
        return $this->removeOption('method');
    }

    public function setAllowExtraFields(bool $allow = true): OptionsBuilderInterface
    {
        return $this->setOption('allow_extra_fields', $allow);
    }

    public function getAllowExtraFields(): ?bool
    {
        return $this->getOption('allow_extra_fields');
    }

    public function removeAllowExtraFields(): OptionsBuilderInterface
    {
        return $this->removeOption('allow_extra_fields');
    }

    public function setExtraFieldsMessage(?string $message): OptionsBuilderInterface
    {
        return $this->setOption('extra_fields_message', $message);
    }

    public function getExtraFieldsMessage(): ?string
    {
        return $this->getOption('extra_fields_message');
    }

    public function removeExtraFieldsMessage(): OptionsBuilderInterface
    {
        return $this->removeOption('extra_fields_message');
    }

    public function setAutoInitialize(bool $autoInitialize = true): OptionsBuilderInterface
    {
        return $this->setOption('auto_initialize', $autoInitialize);
    }

    public function getAutoInitialize(): ?bool
    {
        return $this->getOption('auto_initialize');
    }

    public function removeAutoInitialize(): OptionsBuilderInterface
    {
        return $this->removeOption('auto_initialize');
    }

    public function setPostMaxSizeMessage(?string $message): OptionsBuilderInterface
    {
        return $this->setOption('post_max_size_message', $message);
    }

    public function getPostMaxSizeMessage(): ?string
    {
        return $this->getOption('post_max_size_message');
    }

    public function removePostMaxSizeMessage(): OptionsBuilderInterface
    {
        return $this->removeOption('post_max_size_message');
    }

    public function setTrim(bool $trim = true): OptionsBuilderInterface
    {
        return $this->setOption('trim', $trim);
    }

    public function getTrim(): ?bool
    {
        return $this->getOption('trim');
    }

    public function removeTrim(): OptionsBuilderInterface
    {
        return $this->removeOption('trim');
    }

    public function setTranslationDomain(string $domain): OptionsBuilderInterface
    {
        return $this->setOption('translation_domain', $domain);
    }

    public function disableTranslationDomain(): OptionsBuilderInterface
    {
        return $this->setOption('translation_domain', false);
    }

    public function getTranslationDomain()
    {
        return $this->getOption('translation_domain');
    }

    public function removeTranslationDomain(): OptionsBuilderInterface
    {
        return $this->removeOption('translation_domain');
    }

    public function setRequired(bool $required = true): OptionsBuilderInterface
    {
        return $this->setOption('required', $required);
    }

    public function getRequired(): ?bool
    {
        return $this->getOption('required');
    }

    public function removeRequired(): OptionsBuilderInterface
    {
        return $this->removeOption('required');
    }

    public function setPropertyPath(string $path): OptionsBuilderInterface
    {
        return $this->setOption('property_path', $path);
    }

    public function getPropertyPath(): ?string
    {
        return $this->getOption('property_path');
    }

    public function removePropertyPath(): OptionsBuilderInterface
    {
        return $this->removeOption('property_path');
    }

    public function setMapped(bool $mapped = true): OptionsBuilderInterface
    {
        return $this->setOption('mapped', $mapped);
    }

    public function getMapped(): ?bool
    {
        return $this->getOption('mapped');
    }

    public function removeMapped(): OptionsBuilderInterface
    {
        return $this->removeOption('mapped');
    }

    public function setLabel(string $label): OptionsBuilderInterface
    {
        return $this->setOption('label', $label);
    }

    public function disableLabel(): OptionsBuilderInterface
    {
        return $this->setOption('label', false);
    }

    public function getLabel()
    {
        return $this->getOption('label');
    }

    public function removeLabel(): OptionsBuilderInterface
    {
        return $this->removeOption('label');
    }

    public function setLabelAttr(array $attr): OptionsBuilderInterface
    {
        return $this->setOption('label_attr', $attr);
    }

    public function getLabelAttr(): array
    {
        return $this->getOption('label_attr');
    }

    public function removeLabelAttr(): OptionsBuilderInterface
    {
        return $this->removeOption('label_attr');
    }

    public function setInvalidMessage(?string $message): OptionsBuilderInterface
    {
        return $this->setOption('invalid_message', $message);
    }

    public function getInvalidMessage(): ?string
    {
        return $this->getOption('invalid_message');
    }

    public function removeInvalidMessage(): OptionsBuilderInterface
    {
        return $this->removeOption('invalid_message');
    }

    public function setInvalidMessageParameters(array $parameters): OptionsBuilderInterface
    {
        return $this->setOption('invalid_message_parameters', $parameters);
    }

    public function getInvalidMessageParameters(): array
    {
        return $this->getOption('invalid_message_parameters');
    }

    public function removeInvalidMessageParameters(): OptionsBuilderInterface
    {
        return $this->removeOption('invalid_message_parameters');
    }

    public function setInheritData(bool $inherit = true): OptionsBuilderInterface
    {
        return $this->setOption('inherit_data', $inherit);
    }

    public function getInheritData(): ?bool
    {
        return $this->getOption('inherit_data');
    }

    public function removeInheritData(): OptionsBuilderInterface
    {
        return $this->removeOption('inherit_data');
    }

    public function setErrorBubbling(bool $errorBubbling = true): OptionsBuilderInterface
    {
        return $this->setOption('error_bubbling', $errorBubbling);
    }

    public function getErrorBubbling(): ?bool
    {
        return $this->getOption('error_bubbling');
    }

    public function removeErrorBubbling(): OptionsBuilderInterface
    {
        return $this->removeOption('error_bubbling');
    }

    public function setEmptyData($data): OptionsBuilderInterface
    {
        return $this->setOption('empty_data', $data);
    }

    public function getEmptyData()
    {
        return $this->getOption('empty_data');
    }

    public function removeEmptyData(): OptionsBuilderInterface
    {
        return $this->removeOption('empty_data');
    }

    public function setDisabled(bool $disabled = true): OptionsBuilderInterface
    {
        return $this->setOption('disabled', $disabled);
    }

    public function getDisabled(): ?bool
    {
        return $this->getOption('disabled');
    }

    public function removeDisabled(): OptionsBuilderInterface
    {
        return $this->removeOption('disabled');
    }

    public function setData($data): OptionsBuilderInterface
    {
        return $this->setOption('data', $data);
    }

    public function getData()
    {
        return $this->getOption('data');
    }

    public function removeData(): OptionsBuilderInterface
    {
        return $this->removeOption('data');
    }

    public function setConstraints(array $constraints): OptionsBuilderInterface
    {
        return $this->setOption('constraints', $constraints);
    }

    public function addConstraint(Constraint $constraint): OptionsBuilderInterface
    {
        $constraints = $this->getConstraints();
        if (is_array($constraints) === false) {
            $constraints = [];
        }
        $constraints[] = $constraint;
        $this->setConstraints($constraints);

        return $this;
    }

    public function getConstraints()
    {
        return $this->getOption('constraints');
    }

    public function removeConstraints(): OptionsBuilderInterface
    {
        return $this->removeOption('constraints');
    }

    public function setCompound(bool $compound = true): OptionsBuilderInterface
    {
        return $this->setOption('compound', $compound);
    }

    public function getCompound(): ?bool
    {
        return $this->getOption('compound');
    }

    public function removeCompound(): OptionsBuilderInterface
    {
        return $this->removeOption('compound');
    }

    public function setBlockName(string $name): OptionsBuilderInterface
    {
        return $this->setOption('block_name', $name);
    }

    public function getBlockName(): ?string
    {
        return $this->getOption('block_name');
    }

    public function removeBlockName(): OptionsBuilderInterface
    {
        return $this->removeOption('block_name');
    }

    public function setAttr(array $attr): OptionsBuilderInterface
    {
        return $this->setOption('attr', $attr);
    }

    /** @return $this */
    public function addAttr(string $name, $value): OptionsBuilderInterface
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

    public function getAttrByName(string $name)
    {
        $attr = $this->getOption('attr');

        if (is_array($attr) === false) {
            $return = null;
        } else {
            $key = array_search($name, $attr);
            $return = ($key === false) ? null : $attr[$key];
        }

        return $return;
    }

    public function removeAttr(): OptionsBuilderInterface
    {
        return $this->removeOption('attr');
    }
}
