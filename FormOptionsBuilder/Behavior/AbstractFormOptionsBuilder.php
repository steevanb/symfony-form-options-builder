<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\Behavior;

use Symfony\Component\Validator\Constraint;

abstract class AbstractFormOptionsBuilder implements FormOptionsBuilderInterface
{
    protected $options = [];

    /** @return $this */
    public static function create(): FormOptionsBuilderInterface
    {
        return new static();
    }

    public function asArray(): array
    {
        return $this->options;
    }

    public function setOption(string $name, $value): FormOptionsBuilderInterface
    {
        $this->options[$name] = $value;

        return $this;
    }

    public function getOption(string $name)
    {
        return (array_key_exists($name, $this->options)) ? $this->options[$name] : null;
    }

    public function removeOption(string $name): FormOptionsBuilderInterface
    {
        if (array_key_exists($name, $this->options)) {
            unset($this->options[$name]);
        }

        return $this;
    }

    public function setAllowExtraFields(bool $allow = true): FormOptionsBuilderInterface
    {
        return $this->setOption('allow_extra_fields', $allow);
    }

    public function getAllowExtraFields(): ?bool
    {
        return $this->getOption('allow_extra_fields');
    }

    public function removeAllowExtraFields(): FormOptionsBuilderInterface
    {
        return $this->removeOption('allow_extra_fields');
    }

    public function setExtraFieldsMessage(?string $message): FormOptionsBuilderInterface
    {
        return $this->setOption('extra_fields_message', $message);
    }

    public function getExtraFieldsMessage(): ?string
    {
        return $this->getOption('extra_fields_message');
    }

    public function removeExtraFieldsMessage(): FormOptionsBuilderInterface
    {
        return $this->removeOption('extra_fields_message');
    }

    public function setAutoInitialize(bool $autoInitialize = true): FormOptionsBuilderInterface
    {
        return $this->setOption('auto_initialize', $autoInitialize);
    }

    public function getAutoInitialize(): ?bool
    {
        return $this->getOption('auto_initialize');
    }

    public function removeAutoInitialize(): FormOptionsBuilderInterface
    {
        return $this->removeOption('auto_initialize');
    }

    public function setErrorMapping(array $mapping): FormOptionsBuilderInterface
    {
        return $this->setOption('error_mapping', $mapping);
    }

    public function getErrorMapping(): ?array
    {
        return $this->getOption('error_mapping');
    }

    public function removeErrorMapping(): FormOptionsBuilderInterface
    {
        return $this->removeOption('error_mapping');
    }

    public function setIntention(string $intention): FormOptionsBuilderInterface
    {
        return $this->setOption('intention', $intention);
    }

    public function getIntention(): ?string
    {
        return $this->getOption('intention');
    }

    public function removeIntention(): FormOptionsBuilderInterface
    {
        return $this->removeOption('intention');
    }

    public function setAttr(array $attr): FormOptionsBuilderInterface
    {
        return $this->setOption('attr', $attr);
    }

    public function addAttr(string $name, $value): FormOptionsBuilderInterface
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

    public function removeAttr(): FormOptionsBuilderInterface
    {
        return $this->removeOption('attr');
    }

    public function setLabel(string $label): FormOptionsBuilderInterface
    {
        return $this->setOption('label', $label);
    }

    public function disableLabel(): FormOptionsBuilderInterface
    {
        return $this->setOption('label', false);
    }

    public function getLabel()
    {
        return $this->getOption('label');
    }

    public function removeLabel(): FormOptionsBuilderInterface
    {
        return $this->removeOption('label');
    }

    public function setLabelAttr(array $attr): FormOptionsBuilderInterface
    {
        return $this->setOption('label_attr', $attr);
    }

    public function getLabelAttr(): array
    {
        return $this->getOption('label_attr');
    }

    public function removeLabelAttr(): FormOptionsBuilderInterface
    {
        return $this->removeOption('label_attr');
    }

    public function setLabelFormat(string $format): FormOptionsBuilderInterface
    {
        return $this->setOption('label_format', $format);
    }

    public function getLabelFormat(): ?string
    {
        return $this->getOption('label_format');
    }

    public function removeLabelFormat(): FormOptionsBuilderInterface
    {
        return $this->removeOption('label_format');
    }

    public function setBlockName(string $name): FormOptionsBuilderInterface
    {
        return $this->setOption('block_name', $name);
    }

    public function getBlockName(): ?string
    {
        return $this->getOption('block_name');
    }

    public function removeBlockName(): FormOptionsBuilderInterface
    {
        return $this->removeOption('block_name');
    }

    public function setCompound(bool $compound = true): FormOptionsBuilderInterface
    {
        return $this->setOption('compound', $compound);
    }

    public function getCompound(): ?bool
    {
        return $this->getOption('compound');
    }

    public function removeCompound(): FormOptionsBuilderInterface
    {
        return $this->removeOption('compound');
    }

    public function setConstraints(array $constraints): FormOptionsBuilderInterface
    {
        return $this->setOption('constraints', $constraints);
    }

    public function addConstraint(Constraint $constraint): FormOptionsBuilderInterface
    {
        $constraints = $this->getConstraints();
        if (is_array($constraints) === false) {
            $constraints = [];
        }
        $constraints[] = $constraint;
        $this->setConstraints($constraints);

        return $this;
    }

    public function getConstraints(): array
    {
        return $this->getOption('constraints');
    }

    public function removeConstraints(): FormOptionsBuilderInterface
    {
        return $this->removeOption('constraints');
    }

    public function setDisabled(bool $disabled = true): FormOptionsBuilderInterface
    {
        return $this->setOption('disabled', $disabled);
    }

    public function getDisabled(): ?bool
    {
        return $this->getOption('disabled');
    }

    public function removeDisabled(): FormOptionsBuilderInterface
    {
        return $this->removeOption('disabled');
    }

    public function setEmptyData($emptyData): FormOptionsBuilderInterface
    {
        return $this->setOption('empty_data', $emptyData);
    }

    public function getEmptyData()
    {
        return $this->getOption('empty_data');
    }

    public function removeEmptyData(): FormOptionsBuilderInterface
    {
        return $this->removeOption('empty_data');
    }

    public function setErrorBubbling(bool $errorBubbling = true): FormOptionsBuilderInterface
    {
        return $this->setOption('error_bubbling', $errorBubbling);
    }

    public function getErrorBubbling(): ?bool
    {
        return $this->getOption('error_bubbling');
    }

    public function removeErrorBubbling(): FormOptionsBuilderInterface
    {
        return $this->removeOption('error_bubbling');
    }

    public function setInheritData(bool $inherit = true): FormOptionsBuilderInterface
    {
        return $this->setOption('inherit_data', $inherit);
    }

    public function getInheritData(): ?bool
    {
        return $this->getOption('inherit_data');
    }

    public function removeInheritData(): FormOptionsBuilderInterface
    {
        return $this->removeOption('inherit_data');
    }

    public function setInvalidMessage(string $message): FormOptionsBuilderInterface
    {
        return $this->setOption('invalid_message', $message);
    }

    public function getInvalidMessage(): ?string
    {
        return $this->getOption('invalid_message');
    }

    public function removeInvalidMessage(): FormOptionsBuilderInterface
    {
        return $this->removeOption('invalid_message');
    }

    public function setInvalidMessageParameters(array $parameters): FormOptionsBuilderInterface
    {
        return $this->setOption('invalid_message_parameters', $parameters);
    }

    public function getInvalidMessageParameters(): array
    {
        return $this->getOption('invalid_message_parameters');
    }

    public function removeInvalidMessageParameters(): FormOptionsBuilderInterface
    {
        return $this->removeOption('invalid_message_parameters');
    }

    public function setMapped(bool $mapped = true): FormOptionsBuilderInterface
    {
        return $this->setOption('mapped', $mapped);
    }

    public function getMapped(): ?bool
    {
        return $this->getOption('mapped');
    }

    public function removeMapped(): FormOptionsBuilderInterface
    {
        return $this->removeOption('mapped');
    }

    public function setPropertyPath(string $path): FormOptionsBuilderInterface
    {
        return $this->setOption('property_path', $path);
    }

    public function getPropertyPath(): ?string
    {
        return $this->getOption('property_path');
    }

    public function removePropertyPath(): FormOptionsBuilderInterface
    {
        return $this->removeOption('property_path');
    }

    public function setRequired(bool $required = true): FormOptionsBuilderInterface
    {
        return $this->setOption('required', $required);
    }

    public function getRequired(): ?bool
    {
        return $this->getOption('required');
    }

    public function removeRequired(): FormOptionsBuilderInterface
    {
        return $this->removeOption('required');
    }

    public function setTranslationDomain(string $domain): FormOptionsBuilderInterface
    {
        return $this->setOption('translation_domain', $domain);
    }

    public function disableTranslationDomain(): FormOptionsBuilderInterface
    {
        return $this->setOption('translation_domain', false);
    }

    public function getTranslationDomain()
    {
        return $this->getOption('translation_domain');
    }

    public function removeTranslationDomain(): FormOptionsBuilderInterface
    {
        return $this->removeOption('translation_domain');
    }

    public function setTrim(bool $trim = true): FormOptionsBuilderInterface
    {
        return $this->setOption('trim', $trim);
    }

    public function getTrim(): ?bool
    {
        return $this->getOption('trim');
    }

    public function removeTrim(): FormOptionsBuilderInterface
    {
        return $this->removeOption('trim');
    }

    public function setByReference(bool $byReference = true): FormOptionsBuilderInterface
    {
        return $this->setOption('by_reference', $byReference);
    }

    public function getByReference(): ?bool
    {
        return $this->getOption('by_reference');
    }

    public function removeByReference(): FormOptionsBuilderInterface
    {
        return $this->removeOption('by_reference');
    }

    public function setData($data): FormOptionsBuilderInterface
    {
        return $this->setOption('data', $data);
    }

    public function getData()
    {
        return $this->getOption('data');
    }

    public function removeData(): FormOptionsBuilderInterface
    {
        return $this->removeOption('data');
    }

    public function setDataClass(string $class): FormOptionsBuilderInterface
    {
        return $this->setOption('data_class', $class);
    }

    public function setDataClassClosure(\Closure $closure): FormOptionsBuilderInterface
    {
        return $this->setOption('data_class', $closure);
    }

    public function getDataClass()
    {
        return $this->getOption('data_class');
    }

    public function removeDataClass(): FormOptionsBuilderInterface
    {
        return $this->removeOption('data_class');
    }
}
