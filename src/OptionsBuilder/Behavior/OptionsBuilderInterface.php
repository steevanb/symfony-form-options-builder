<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior;

use Symfony\Component\Validator\Constraint;

interface OptionsBuilderInterface
{
    public static function create(): static;

    public static function getBuilderType(): string;

    public function setOption(string $name, mixed $value): static;

    public function getOption(string $name): mixed;

    public function removeOption(string $name): static;

    /** @return array<mixed> */
    public function asArray(): array;

    /** @return array<mixed> */
    public function asVariadic(string $child = null): array;

    /** @param array<mixed> $attr */
    public function setAttr(array $attr): static;

    /** @return array<mixed>|null */
    public function getAttr(): ?array;

    public function removeAttr(): static;

    public function setLabel(string $label): static;

    public function disableLabel(): static;

    public function getLabel(): string|false|null;

    public function removeLabel(): static;

    /** @param array<string|int> $attr */
    public function setLabelAttr(array $attr): static;

    /** @return array<string|int>|null */
    public function getLabelAttr(): ?array;

    public function removeLabelAttr(): static;

    public function setDisabled(bool $disabled = true): static;

    public function getDisabled(): ?bool;

    public function removeDisabled(): static;

    public function setTranslationDomain(string $domain): static;

    public function disableTranslationDomain(): static;

    public function getTranslationDomain(): string|false|null;

    public function removeTranslationDomain(): static;

    /** @param array<Constraint> $constraints */
    public function setConstraints(array $constraints): static;

    /** @return array<Constraint>|null */
    public function getConstraints(): array|null;

    public function removeConstraints(): static;

    public function setEmptyData(mixed $emptyData): static;

    public function getEmptyData(): mixed;

    public function removeEmptyData(): static;

    public function setInvalidMessage(string $message): static;

    public function getInvalidMessage(): ?string;

    public function removeInvalidMessage(): static;

    /** @param array<mixed> $parameters */
    public function setInvalidMessageParameters(array $parameters): static;

    /** @return array<mixed>|null */
    public function getInvalidMessageParameters(): ?array;

    public function removeInvalidMessageParameters(): static;

    public function setRequired(bool $required = true): static;

    public function getRequired(): ?bool;

    public function removeRequired(): static;

    public function setTrim(bool $trim = true): static;

    public function getTrim(): ?bool;

    public function removeTrim(): static;

    public function setAutoInitialize(bool $autoInitialize = true): static;

    public function getAutoInitialize(): ?bool;

    public function removeAutoInitialize(): static;

    public function setMapped(bool $mapped = true): static;

    public function getMapped(): ?bool;

    public function removeMapped(): static;

    public function setErrorBubbling(bool $errorBubbling = true): static;

    public function getErrorBubbling(): ?bool;

    public function removeErrorBubbling(): static;

    public function setData(mixed $data): static;

    public function getData(): mixed;

    public function removeData(): static;

    public function setPropertyPath(string $path): static;

    public function getPropertyPath(): ?string;

    public function removePropertyPath(): static;

    public function setBlockName(string $name): static;

    public function getBlockName(): ?string;

    public function removeBlockName(): static;

    public function setAction(string $action): static;

    public function getAction(): ?string;

    public function removeAction(): static;

    public function setMethod(string $method): static;

    public function getMethod(): ?string;

    public function removeMethod(): static;

    public function setAllowExtraFields(bool $allow = true): static;

    public function getAllowExtraFields(): ?bool;

    public function removeAllowExtraFields(): static;

    public function setExtraFieldsMessage(string $message): static;

    public function getExtraFieldsMessage(): ?string;

    public function removeExtraFieldsMessage(): static;

    public function setPostMaxSizeMessage(string $message): static;

    public function getPostMaxSizeMessage(): ?string;

    public function removePostMaxSizeMessage(): static;

    public function setInheritData(bool $inherit = true): static;

    public function getInheritData(): ?bool;

    public function removeInheritData(): static;

    public function setCompound(bool $compound = true): static;

    public function getCompound(): ?bool;

    public function removeCompound(): static;
}
