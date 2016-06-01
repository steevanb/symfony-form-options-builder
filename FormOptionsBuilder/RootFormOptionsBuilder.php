<?php

namespace steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder;

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class RootFormOptionsBuilder extends FormOptionsBuilder implements RootFormOptionsBuilderInterface
{
    /**
     * @param string $name
     * @return $this
     */
    public function setCsrfFieldName($name)
    {
        return $this->setOption('csrf_field_name', $name);
    }

    /**
     * @return string
     */
    public function getCsrfFieldName()
    {
        return $this->getOption('csrf_field_name');
    }

    /**
     * @return $this
     */
    public function removeCsrfFieldName()
    {
        return $this->removeOption('csrf_field_name');
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setCsrfMessage($message)
    {
        return $this->setOption('csrf_message', $message);
    }

    /**
     * @return string
     */
    public function getCsrfMessage()
    {
        return $this->getOption('csrf_message');
    }

    /**
     * @return $this
     */
    public function removeCsrfMessage()
    {
        return $this->removeOption('csrf_message');
    }

    /**
     * @param bool $protection
     * @return $this
     */
    public function setCsrfProtection($protection = true)
    {
        return $this->setOption('csrf_protection', $protection);
    }

    /**
     * @return bool
     */
    public function getCsrfProtection()
    {
        return $this->getOption('csrf_protection');
    }

    /**
     * @return $this
     */
    public function removeCsrfProtection()
    {
        return $this->removeOption('csrf_protection');
    }

    /**
     * @param CsrfTokenManagerInterface $provider
     * @return $this
     */
    public function setCsrfProvider(CsrfTokenManagerInterface $provider)
    {
        return $this->setOption('csrf_provider', $provider);
    }

    /**
     * @return CsrfTokenManagerInterface|string
     */
    public function getCsrfProvider()
    {
        return $this->getOption('csrf_provider');
    }

    /**
     * @return $this
     */
    public function removeCsrfProvider()
    {
        return $this->removeOption('csrf_provider');
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setCsrfTokenId($id)
    {
        return $this->setOption('csrf_token_id', $id);
    }

    /**
     * @return string
     */
    public function getCsrfTokenId()
    {
        return $this->getOption('csrf_token_id');
    }

    /**
     * @return $this
     */
    public function removeCsrfTokenId()
    {
        return $this->removeOption('csrf_token_id');
    }

    /**
     * @param CsrfTokenManagerInterface $manager
     * @return $this
     */
    public function setCsrfTokenManager(CsrfTokenManagerInterface $manager)
    {
        return $this->setOption('csrf_token_manager', $manager);
    }

    /**
     * @return CsrfTokenManagerInterface|string
     */
    public function getCsrfTokenManager()
    {
        return $this->getOption('csrf_token_manager');
    }

    /**
     * @return $this
     */
    public function removeCsrfTokenManager()
    {
        return $this->removeOption('csrf_token_manager');
    }

    /**
     * @param string $method
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function setMethod($method)
    {
        return $this->setOption('method', $method);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function getMethod()
    {
        return $this->getOption('method');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function removeMethod()
    {
        return $this->removeOption('method');
    }

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function setPostMaxSizeMessage($message)
    {
        return $this->setOption('post_max_size_message', $message);
    }

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function getPostMaxSizeMessage()
    {
        return $this->getOption('post_max_size_message');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function removePostMaxSizeMessage()
    {
        return $this->removeOption('post_max_size_message');
    }
}
