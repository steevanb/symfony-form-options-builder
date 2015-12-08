<?php

namespace steevanb\FormUtils;

/**
 * @link https://github.com/symfony/symfony/blob/2.8/UPGRADE-2.8.md#form
 * @deprecated Since 2.8
 */
trait NameTrait
{
    /**
     * @return string
     * @link https://github.com/symfony/symfony/blob/2.8/UPGRADE-2.8.md#form
     * @deprecated Since 2.8
     */
    public function getName()
    {
        $fullClassName = get_class($this);
        $className = ($pos = strrpos($fullClassName, '\\')) ? substr($fullClassName, $pos + 1) : $fullClassName;
        $className = ($pos = strrpos($className, 'Type')) ? substr($className, 0, -4) : $className;

        return 'form_type_' . strtolower($className);
    }
}
