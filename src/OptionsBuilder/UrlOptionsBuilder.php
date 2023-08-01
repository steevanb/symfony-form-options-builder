<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\AbstractOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class UrlOptionsBuilder extends AbstractOptionsBuilder
{
    public const PROTOCOL_HTTP = 'http';
    public const PROTOCOL_HTTPS = 'https';
    public const PROTOCOL_FTP = 'ftp';

    public static function getBuilderType(): string
    {
        return UrlType::class;
    }

    public function setDefaultProtocol(string $protocol): static
    {
        return $this->setOption('default_protocol', $protocol);
    }

    public function getDefaultProtocol(): ?string
    {
        return $this->getOption('default_protocol');
    }

    public function removeDefaultProtocol(): static
    {
        return $this->removeOption('default_protocol');
    }
}
