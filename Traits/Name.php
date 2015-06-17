<?php

namespace steevanb\FormUtils\Traits;

trait Name
{
    /**
     * @return string
     */
    public function getName()
    {
        $fullClassName = get_class($this);
        $className = ($pos = strrpos($fullClassName, '\\')) ? substr($fullClassName, $pos + 1) : $fullClassName;
        $className = ($pos = strrpos($className, 'Type')) ? substr($className, 0, -4) : $className;

        return 'form_type_' . strtolower($className);
    }
}
