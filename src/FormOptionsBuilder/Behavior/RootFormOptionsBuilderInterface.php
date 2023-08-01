<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\Behavior;

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

interface RootFormOptionsBuilderInterface extends FormOptionsBuilderInterface
{
    public function setCsrfFieldName(string $name): static;

    public function getCsrfFieldName(): ?string;

    public function removeCsrfFieldName(): static;

    public function setCsrfMessage(string $message): static;

    public function getCsrfMessage(): string;

    public function removeCsrfMessage(): static;

    public function setCsrfProtection(bool $protection = true): static;

    public function getCsrfProtection(): ?bool;

    public function removeCsrfProtection(): static;

    public function setCsrfProvider(CsrfTokenManagerInterface $provider): static;

    public function getCsrfProvider(): ?CsrfTokenManagerInterface;

    public function removeCsrfProvider(): static;

    public function setCsrfTokenId(string $id): static;

    public function getCsrfTokenId(): ?string;

    public function removeCsrfTokenId(): static;

    public function setCsrfTokenManager(CsrfTokenManagerInterface $manager): static;

    public function getCsrfTokenManager(): ?CsrfTokenManagerInterface;

    public function removeCsrfTokenManager(): static;

    public function setMethod(string $method): static;

    public function getMethod(): string;

    public function removeMethod(): static;

    public function setPostMaxSizeMessage(string $message): static;

    public function getPostMaxSizeMessage(): ?string;

    public function removePostMaxSizeMessage(): static;

    public function setValidationGroups(array $groups): static;

    public function setValidationGroupsClosure(\Closure $groups): static;

    public function getValidationGroups();

    public function removeValidationGroups(): static;

    public function setAction(string $action): static;

    public function getAction(): ?string;

    public function removeAction(): static;
}
