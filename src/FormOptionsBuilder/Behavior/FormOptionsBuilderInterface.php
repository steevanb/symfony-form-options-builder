<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\Behavior;

use Symfony\Component\Validator\Constraint;

interface FormOptionsBuilderInterface
{
    /** @return $this */
    public static function create(): self;

    /** @return $this */
    public function setOption(string $name, $value): self;

    public function getOption(string $name);

    /** @return $this */
    public function removeOption(string $name): self;

    public function asArray(): array;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#allow-extra-fields
     */
    public function setAllowExtraFields(bool $allow = true): self;

    public function getAllowExtraFields(): ?bool;

    /** @return $this */
    public function removeAllowExtraFields(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#extra-fields-message
     */
    public function setExtraFieldsMessage(string $message): self;

    public function getExtraFieldsMessage(): ?string;

    /** @return $this */
    public function removeExtraFieldsMessage(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#attr
     */
    public function setAttr(array $attr): self;

    public function getAttr(): ?array;

    /** @return $this */
    public function removeAttr(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize(bool $auto = true): self;

    public function getAutoInitialize(): ?bool;

    /** @return $this */
    public function removeAutoInitialize(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#block-name
     */
    public function setBlockName(string $name): self;

    public function getBlockName(): ?string;

    /** @return $this */
    public function removeBlockName(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#by-reference
     */
    public function setByReference(bool $byReference = true): self;

    public function getByReference(): ?bool;

    /** @return $this */
    public function removeByReference(): self;

    /**
     * @return bool
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#compound
     */
    public function setCompound(bool $compound = true): self;

    public function getCompound(): ?bool;

    /** @return $this */
    public function removeCompound(): self;

    /**
     * @param Constraint[] $constraints
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#constraints
     */
    public function setConstraints(array $constraints): self;

    public function getConstraints(): ?array;

    /** @return $this */
    public function removeConstraints(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data
     */
    public function setData($data): self;

    public function getData();

    /** @return $this */
    public function removeData(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data-class
     */
    public function setDataClass(string $class): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#data-class
     */
    public function setDataClassClosure(\Closure $closure): self;

    public function getDataClass();

    /** @return $this */
    public function removeDataClass(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#disabled
     */
    public function setDisabled(bool $disabled = true): self;

    public function getDisabled(): ?bool;

    /** @return $this */
    public function removeDisabled(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function setEmptyData($data): self;

    public function getEmptyData();

    /** @return $this */
    public function removeEmptyData(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling(bool $errorBubbling = true): self;

    public function getErrorBubbling(): ?bool;

    /** @return $this */
    public function removeErrorBubbling(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-mapping
     */
    public function setErrorMapping(array $mapping): self;

    public function getErrorMapping(): ?array;

    /** @return $this */
    public function removeErrorMapping(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#inherit-data
     */
    public function setInheritData(bool $inherit = true): self;

    public function getInheritData(): ?bool;

    /** @return $this */
    public function removeInheritData(): self;

    /**
     * @return $this
     * @link https://php-and-symfony.matthiasnoback.nl/2013/02/symfony2-security-enhancements-part-i/
     */
    public function setIntention(string $intention): self;

    public function getIntention(): ?string;

    /** @return $this */
    public function removeIntention(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message
     */
    public function setInvalidMessage(string $message): self;

    public function getInvalidMessage(): ?string;

    /** @return $this */
    public function removeInvalidMessage(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function setInvalidMessageParameters(array $parameters): self;

    public function getInvalidMessageParameters(): ?array;

    /** @return $this */
    public function removeInvalidMessageParameters(): self;

    /**
     * @param string|false $label
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function setLabel(string $label): self;

    /** @return $this */
    public function disableLabel(): self;

    /** @return string|false|null */
    public function getLabel();

    /** @return $this */
    public function removeLabel(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label-attr
     */
    public function setLabelAttr(array $attr): self;

    public function getLabelAttr(): array;

    /** @return $this */
    public function removeLabelAttr();

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label-format
     */
    public function setLabelFormat(string $format): self;

    public function getLabelFormat(): ?string;

    /** @return $this */
    public function removeLabelFormat(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#mapped
     */
    public function setMapped(bool $mapped = true): self;

    public function getMapped(): ?bool;

    /** @return $this */
    public function removeMapped(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath(string $path): self;

    public function getPropertyPath(): ?string;

    /** @return $this */
    public function removePropertyPath(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#required
     */
    public function setRequired(bool $required = true): self;

    public function getRequired(): ?bool;

    /** @return $this */
    public function removeRequired(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain(string $domain): self;

    /** @return $this */
    public function disableTranslationDomain(): self;

    /** @return string|false */
    public function getTranslationDomain();

    /** @return $this */
    public function removeTranslationDomain(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#trim
     */
    public function setTrim(bool $trim = true): self;

    public function getTrim(): ?bool;

    /** @return $this */
    public function removeTrim(): self;
}
