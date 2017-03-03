<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder;

trait BlockPrefixTrait
{
    public function getBlockPrefix()
    {
        $fullClassName = get_class($this);
        $className = ($pos = strrpos($fullClassName, '\\')) ? substr($fullClassName, $pos + 1) : $fullClassName;
        $className = ($pos = strrpos($className, 'Type')) ? substr($className, 0, -4) : $className;

        return 'form_type_' . strtolower($className);
    }
}
