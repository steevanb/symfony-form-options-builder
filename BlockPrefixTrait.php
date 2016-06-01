<?php

namespace steevanb\SymfonyFormOptionsBuilder;

trait BlockPrefixTrait
{
    /**
     * @return string
     * @link https://github.com/symfony/symfony/pull/16724
     * @since 2.8
     */
    public function getBlockPrefix()
    {
        $fullClassName = get_class($this);
        $className = ($pos = strrpos($fullClassName, '\\')) ? substr($fullClassName, $pos + 1) : $fullClassName;
        $className = ($pos = strrpos($className, 'Type')) ? substr($className, 0, -4) : $className;

        return 'form_type_' . strtolower($className);
    }
}
