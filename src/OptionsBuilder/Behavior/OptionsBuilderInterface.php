<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

interface OptionsBuilderInterface
{
    /** @return $this */
    public static function create(): self;

    public static function getBuilderType(): string;

    /** @return $this */
    public function setOption(string $name, $value): self;

    public function getOption(string $name);

    /** @return $this */
    public function removeOption(string $name): self;

    public function asArray(): array;

    public function asVariadic(?string $child = null): array;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#attr
     */
    public function setAttr(array $attr): self;

    public function getAttr();

    /** @return $this */
    public function removeAttr(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
    public function setLabel(string $label): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#label
     */
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
    public function removeLabelAttr(): self;

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
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#translation-domain
     */
    public function setTranslationDomain(string $domain): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#translation-domain
     */
    public function disableTranslationDomain(): self;

    /** @return string|false */
    public function getTranslationDomain();

    /** @return $this */
    public function removeTranslationDomain(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#constraints
     */
    public function setConstraints(array $constraints): self;

    public function getConstraints();

    /** @return $this */
    public function removeConstraints(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function setEmptyData($emptyData): self;

    public function getEmptyData();

    /** @return $this */
    public function removeEmptyData(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message
     */
    public function setInvalidMessage(?string $message): self;

    public function getInvalidMessage(): ?string;

    /** @return $this */
    public function removeInvalidMessage(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#invalid-message-parameters
     */
    public function setInvalidMessageParameters(array $parameters): self;

    public function getInvalidMessageParameters(): array;

    /** @return $this */
    public function removeInvalidMessageParameters(): self;

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
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#trim
     */
    public function setTrim(bool $trim = true): self;

    public function getTrim(): ?bool;

    /** @return $this */
    public function removeTrim(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#auto-initialize
     */
    public function setAutoInitialize(bool $autoInitialize = true): self;

    public function getAutoInitialize(): ?bool;

    /** @return $this */
    public function removeAutoInitialize(): self;

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
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#error-bubbling
     */
    public function setErrorBubbling(bool $errorBubbling = true): self;

    public function getErrorBubbling(): ?bool;

    /** @return $this */
    public function removeErrorBubbling(): self;

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
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath(string $path): self;

    public function getPropertyPath(): ?string;

    /** @return $this */
    public function removePropertyPath(): self;

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
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function setAction(?string $action): self;

    public function getAction(): ?string;

    /** @return $this */
    public function removeAction(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#method
     */
    public function setMethod(string $method): self;

    public function getMethod(): ?string;

    /** @return $this */
    public function removeMethod(): self;

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
    public function setExtraFieldsMessage(?string $message): self;

    public function getExtraFieldsMessage(): ?string;

    /** @return $this */
    public function removeExtraFieldsMessage(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#post-max-size-message
     */
    public function setPostMaxSizeMessage(?string $message): self;

    public function getPostMaxSizeMessage(): ?string;

    /** @return $this */
    public function removePostMaxSizeMessage(): self;

    /** @link http://symfony.com/doc/3.0/reference/forms/types/form.html#inherit-data */
    public function setInheritData(bool $inherit = true): self;

    public function getInheritData(): ?bool;

    /** @return $this */
    public function removeInheritData(): self;

    /** @link http://symfony.com/doc/3.0/reference/forms/types/form.html#compound */
    public function setCompound(bool $compound = true): self;

    public function getCompound(): ?bool;

    public function removeCompound(): self;
}
