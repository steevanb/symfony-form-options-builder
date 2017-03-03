<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder;

use steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\Behavior\AbstractFormOptionsBuilder;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\Behavior\RootFormOptionsBuilderInterface;

class RootFormOptionsBuilder extends AbstractFormOptionsBuilder implements RootFormOptionsBuilderInterface
{
    public function setCsrfFieldName(string $name): RootFormOptionsBuilderInterface
    {
        return $this->setOption('csrf_field_name', $name);
    }

    public function getCsrfFieldName(): ?string
    {
        return $this->getOption('csrf_field_name');
    }

    public function removeCsrfFieldName(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('csrf_field_name');
    }

    public function setCsrfMessage(string $message): RootFormOptionsBuilderInterface
    {
        return $this->setOption('csrf_message', $message);
    }

    public function getCsrfMessage(): string
    {
        return $this->getOption('csrf_message');
    }

    public function removeCsrfMessage(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('csrf_message');
    }

    public function setCsrfProtection(bool $protection = true): RootFormOptionsBuilderInterface
    {
        return $this->setOption('csrf_protection', $protection);
    }

    public function getCsrfProtection(): ?bool
    {
        return $this->getOption('csrf_protection');
    }

    public function removeCsrfProtection(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('csrf_protection');
    }

    public function setCsrfProvider(CsrfTokenManagerInterface $provider): RootFormOptionsBuilderInterface
    {
        return $this->setOption('csrf_provider', $provider);
    }

    public function getCsrfProvider(): ?CsrfTokenManagerInterface
    {
        return $this->getOption('csrf_provider');
    }

    public function removeCsrfProvider(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('csrf_provider');
    }

    public function setCsrfTokenId(string $id): RootFormOptionsBuilderInterface
    {
        return $this->setOption('csrf_token_id', $id);
    }

    public function getCsrfTokenId(): ?string
    {
        return $this->getOption('csrf_token_id');
    }

    public function removeCsrfTokenId(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('csrf_token_id');
    }

    public function setCsrfTokenManager(CsrfTokenManagerInterface $manager): RootFormOptionsBuilderInterface
    {
        return $this->setOption('csrf_token_manager', $manager);
    }

    public function getCsrfTokenManager(): ?CsrfTokenManagerInterface
    {
        return $this->getOption('csrf_token_manager');
    }

    public function removeCsrfTokenManager(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('csrf_token_manager');
    }

    public function setMethod(string $method): RootFormOptionsBuilderInterface
    {
        return $this->setOption('method', $method);
    }

    public function getMethod(): string
    {
        return $this->getOption('method');
    }

    public function removeMethod(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('method');
    }

    public function setPostMaxSizeMessage(string $message): RootFormOptionsBuilderInterface
    {
        return $this->setOption('post_max_size_message', $message);
    }

    public function getPostMaxSizeMessage(): ?string
    {
        return $this->getOption('post_max_size_message');
    }

    public function removePostMaxSizeMessage(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('post_max_size_message');
    }

    public function setValidationGroups(array $groups): RootFormOptionsBuilderInterface
    {
        return $this->setOption('validation_groups', $groups);
    }

    public function setValidationGroupsClosure(\Closure $groups): RootFormOptionsBuilderInterface
    {
        return $this->setOption('validation_groups', $groups);
    }

    /** @return $this */
    public function addValidationGroup(string $group): RootFormOptionsBuilderInterface
    {
        $groups = $this->getValidationGroups();
        if (in_array($group, $groups) === false) {
            $groups[] = $group;
        }

        return $this->setValidationGroups($groups);
    }

    public function getValidationGroups(): array
    {
        return $this->getOption('validation_groups');
    }

    public function removeValidationGroups(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('validation_groups');
    }

    public function setAction(string $action): RootFormOptionsBuilderInterface
    {
        return $this->setOption('action', $action);
    }

    public function getAction(): ?string
    {
        return $this->getOption('action');
    }

    public function removeAction(): RootFormOptionsBuilderInterface
    {
        return $this->removeOption('action');
    }
}
