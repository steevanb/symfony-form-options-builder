<?php

namespace steevanb\FormUtils\OptionsBuilder;


use steevanb\FormUtils\Behavior\OptionAccessorsTrait;

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
