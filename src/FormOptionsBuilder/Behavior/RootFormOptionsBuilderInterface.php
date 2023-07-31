<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\Behavior;

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

interface RootFormOptionsBuilderInterface extends FormOptionsBuilderInterface
{
    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/form/csrf_protection.html
     */
    public function setCsrfFieldName(string $name): self;

    public function getCsrfFieldName(): ?string;

    /** @return $this */
    public function removeCsrfFieldName(): self;

    /**
     * @return $this
     * @link https://github.com/symfony/form/blob/3.0/Extension/Csrf/Type/FormTypeCsrfExtension.php#L79
     */
    public function setCsrfMessage(string $message): self;

    public function getCsrfMessage(): string;

    /** @return $this */
    public function removeCsrfMessage(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/form/csrf_protection.html
     */
    public function setCsrfProtection(bool $protection = true): self;

    public function getCsrfProtection(): ?bool;

    /** @return $this */
    public function removeCsrfProtection(): self;

    /** @return $this */
    public function setCsrfProvider(CsrfTokenManagerInterface $provider): self;

    public function getCsrfProvider(): ?CsrfTokenManagerInterface;

    /** @return $this */
    public function removeCsrfProvider(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/form/csrf_protection.html
     */
    public function setCsrfTokenId(string $id): self;

    public function getCsrfTokenId(): ?string;

    /** @return $this */
    public function removeCsrfTokenId(): self;

    /**
     * @return $this
     * @link https://github.com/symfony/form/blob/3.0/Extension/Csrf/Type/FormTypeCsrfExtension.php#L77
     */
    public function setCsrfTokenManager(CsrfTokenManagerInterface $manager): self;

    public function getCsrfTokenManager(): ?CsrfTokenManagerInterface;

    public function removeCsrfTokenManager(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#method
     */
    public function setMethod(string $method): self;

    public function getMethod(): string;

    /** @return $this */
    public function removeMethod(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#post-max-size-message
     */
    public function setPostMaxSizeMessage(string $message): self;

    public function getPostMaxSizeMessage(): ?string;

    /** @return $this */
    public function removePostMaxSizeMessage(): self;

    /**
     * @return $this
     * @link https://symfony.com/doc/3.0/form/validation_groups.html
     */
    public function setValidationGroups(array $groups): self;

    /** @return $this */
    public function setValidationGroupsClosure(\Closure $groups): self;

    public function getValidationGroups();

    /** @return $this */
    public function removeValidationGroups(): self;

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#action
     */
    public function setAction(string $action): self;

    public function getAction(): ?string;

    /** @return $this */
    public function removeAction(): self;
}
