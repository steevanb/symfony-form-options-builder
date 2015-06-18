<?php

namespace steevanb\FormUtils\Fields\Traits;

trait PropertyPath
{
    /**
     * @param string $path
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#property-path
     */
    public function setPropertyPath($path)
    {
        return $this->setParameter('property_path', $path);
    }

    /**
     * @return string
     */
    public function getPropertyPath()
    {
        return $this->getParameter('property_path');
    }
}
