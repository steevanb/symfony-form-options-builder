<?php

namespace steevanb\FormUtils\Field;

class Url extends AbstractField
{
    use Behavior\FormTypeTrait;
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
        return $this->setParameter('default_protocol', $protocol);
    }

    /**
     * @param null|string $default
     * @return mixed
     */
    public function getDefaultProtocol($default = self::PROTOCOL_HTTP)
    {
        return $this->getParameter('default_protocol', $default);
    }
}
