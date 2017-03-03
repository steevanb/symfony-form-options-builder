<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;


use Symfony\Component\Form\Extension\Core\Type\UrlType;
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\{
    OptionsBuilderInterface,
    AbstractOptionsBuilder
};

class UrlOptionsBuilder extends AbstractOptionsBuilder
{
    public const PROTOCOL_HTTP = 'http';
    public const PROTOCOL_HTTPS = 'https';
    public const PROTOCOL_FTP = 'ftp';

    public static function getBuilderType(): string
    {
        return UrlType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/url.html#default-protocol
     */
    public function setDefaultProtocol(string $protocol): OptionsBuilderInterface
    {
        return $this->setOption('default_protocol', $protocol);
    }

    public function getDefaultProtocol(): ?string
    {
        return $this->getOption('default_protocol');
    }

    /** @return $this */
    public function removeDefaultProtocol(): OptionsBuilderInterface
    {
        return $this->removeOption('default_protocol');
    }
}
