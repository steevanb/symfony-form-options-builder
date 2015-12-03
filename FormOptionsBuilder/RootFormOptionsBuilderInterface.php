<?php

namespace steevanb\FormUtils\FormOptionsBuilder;

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

interface RootFormOptionsBuilderInterface extends FormOptionsBuilderInterface
{
    /**
     * @param string $name
     * @return $this
     */
    public function setCsrfFieldName($name);

    /**
     * @return string
     */
    public function getCsrfFieldName();

    /**
     * @return $this
     */
    public function removeCsrfFieldName();

    /**
     * @param string $message
     * @return $this
     */
    public function setCsrfMessage($message);

    /**
     * @return string
     */
    public function getCsrfMessage();

    /**
     * @return $this
     */
    public function removeCsrfMessage();

    /**
     * @param bool $protection
     * @return $this
     */
    public function setCsrfProtection($protection = true);

    /**
     * @return bool
     */
    public function getCsrfProtection();

    /**
     * @return $this
     */
    public function removeCsrfProtection();

    /**
     * @param CsrfTokenManagerInterface $provider
     * @return $this
     */
    public function setCsrfProvider(CsrfTokenManagerInterface $provider);

    /**
     * @return CsrfTokenManagerInterface|string
     */
    public function getCsrfProvider();

    /**
     * @return $this
     */
    public function removeCsrfProvider();

    /**
     * @param string $id
     * @return $this
     */
    public function setCsrfTokenId($id);

    /**
     * @return string
     */
    public function getCsrfTokenId();

    /**
     * @return $this
     */
    public function removeCsrfTokenId();

    /**
     * @param CsrfTokenManagerInterface $manager
     * @return $this
     */
    public function setCsrfTokenManager(CsrfTokenManagerInterface $manager);

    /**
     * @return CsrfTokenManagerInterface|string
     */
    public function getCsrfTokenManager();

    /**
     * @return $this
     */
    public function removeCsrfTokenManager();

    /**
     * @param string $method
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function setMethod($method);

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function getMethod();

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function removeMethod();

    /**
     * @param string $message
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function setPostMaxSizeMessage($message);

    /**
     * @return string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function getPostMaxSizeMessage();

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#post-max-size-message
     */
    public function removePostMaxSizeMessage();
}
