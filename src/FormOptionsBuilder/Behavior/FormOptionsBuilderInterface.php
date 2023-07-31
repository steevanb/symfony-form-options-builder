<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\Behavior;

use Symfony\Component\Validator\Constraint;

interface FormOptionsBuilderInterface
{
    public static function create(): static;

    public function setOption(string $name, $value): static;

    public function getOption(string $name);

    public function removeOption(string $name): static;

    public function asArray(): array;

    public function setAllowExtraFields(bool $allow = true): static;

    public function getAllowExtraFields(): ?bool;

    public function removeAllowExtraFields(): static;

    public function setExtraFieldsMessage(string $message): static;

    public function getExtraFieldsMessage(): ?string;

    public function removeExtraFieldsMessage(): static;

    public function setAttr(array $attr): static;

    public function getAttr(): ?array;

    public function removeAttr(): static;

    public function setAutoInitialize(bool $auto = true): static;

    public function getAutoInitialize(): ?bool;

    public function removeAutoInitialize(): static;

    public function setBlockName(string $name): static;

    public function getBlockName(): ?string;

    public function removeBlockName(): static;

    public function setByReference(bool $byReference = true): static;

    public function getByReference(): ?bool;

    public function removeByReference(): static;

    public function setCompound(bool $compound = true): static;

    public function getCompound(): ?bool;

    public function removeCompound(): static;

    /** @param array<Constraint> $constraints */
    public function setConstraints(array $constraints): static;

    public function getConstraints(): ?array;

    public function removeConstraints(): static;

    public function setData($data): static;

    public function getData();

    public function removeData(): static;

    public function setDataClass(string $class): static;

    public function setDataClassClosure(\Closure $closure): static;

    public function getDataClass();

    public function removeDataClass(): static;

    public function setDisabled(bool $disabled = true): static;

    public function getDisabled(): ?bool;

    public function removeDisabled(): static;

    public function setEmptyData($data): static;

    public function getEmptyData();

    public function removeEmptyData(): static;

    public function setErrorBubbling(bool $errorBubbling = true): static;

    public function getErrorBubbling(): ?bool;

    public function removeErrorBubbling(): static;

    public function setErrorMapping(array $mapping): static;

    public function getErrorMapping(): ?array;

    public function removeErrorMapping(): static;

    public function setInheritData(bool $inherit = true): static;

    public function getInheritData(): ?bool;

    public function removeInheritData(): static;

    public function setIntention(string $intention): static;

    public function getIntention(): ?string;

    public function removeIntention(): static;

    public function setInvalidMessage(string $message): static;

    public function getInvalidMessage(): ?string;

    public function removeInvalidMessage(): static;

    public function setInvalidMessageParameters(array $parameters): static;

    public function getInvalidMessageParameters(): ?array;

    public function removeInvalidMessageParameters(): static;

    public function setLabel(string $label): static;

    public function disableLabel(): static;

    /** @return string|false|null */
    public function getLabel(): string|false|null;

    public function removeLabel(): static;

    public function setLabelAttr(array $attr): static;

    public function getLabelAttr(): array;

    public function removeLabelAttr(): static;

    public function setLabelFormat(string $format): static;

    public function getLabelFormat(): ?string;

    public function removeLabelFormat(): static;

    public function setMapped(bool $mapped = true): static;

    public function getMapped(): ?bool;

    public function removeMapped(): static;

    public function setPropertyPath(string $path): static;

    public function getPropertyPath(): ?string;

    public function removePropertyPath(): static;

    public function setRequired(bool $required = true): static;

    public function getRequired(): ?bool;

    public function removeRequired(): static;

    public function setTranslationDomain(string $domain): static;

    public function disableTranslationDomain(): static;

    public function getTranslationDomain(): string|false;

    public function removeTranslationDomain(): static;

    public function setTrim(bool $trim = true): static;

    public function getTrim(): ?bool;

    public function removeTrim(): static;
}
