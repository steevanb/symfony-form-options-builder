<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;


use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\OptionsBuilderInterface
};
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class UrlOptionsBuilder extends AbstractOptionsBuilder
{
    public const PROTOCOL_HTTP = 'http';
    public const PROTOCOL_HTTPS = 'https';
    public const PROTOCOL_FTP = 'ftp';

    /** @return class-string */
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
