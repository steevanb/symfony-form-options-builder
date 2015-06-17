<?php

namespace steevanb\FormUtils\Fields;

class Url extends AbstractField
{
    use Traits\FormType;

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
     * @return mixed
     */
    public function getDefaultProtocol()
    {
        return $this->getParameter('default_protocol', 'http');
    }
}
