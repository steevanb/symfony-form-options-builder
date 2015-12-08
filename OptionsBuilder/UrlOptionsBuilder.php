<?php

namespace steevanb\FormUtils\OptionsBuilder;


use steevanb\FormUtils\Behavior\OptionAccessorsTrait;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class UrlOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    use Behavior\PlaceHolderTrait;
    use Behavior\AutofocusTrait;
    use Behavior\AutocompleteTrait;

    const PROTOCOL_HTTP = 'http';
    const PROTOCOL_HTTPS = 'https';
    const PROTOCOL_FTP = 'ftp';

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return UrlType::class;
    }

    /**
     * @param mixed $protocol
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/url.html#default-protocol
     */
    public function setDefaultProtocol($protocol)
    {
        return $this->setOption('default_protocol', $protocol);
    }

    /**
     * @return mixed
     */
    public function getDefaultProtocol()
    {
        return $this->getOption('default_protocol');
    }
}
