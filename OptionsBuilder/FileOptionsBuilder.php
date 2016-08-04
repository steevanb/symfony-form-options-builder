<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use steevanb\SymfonyFormOptionsBuilder\Behavior\DataClassTrait;
use steevanb\SymfonyFormOptionsBuilder\Behavior\LabelFormatTrait;
use steevanb\SymfonyFormOptionsBuilder\Behavior\OptionAccessorsTrait;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FileOptionsBuilder extends AbstractOptionsBuilder
{
    use OptionAccessorsTrait;
    /** @link http://symfony.com/doc/current/reference/forms/types/file.html#data-class */
    use DataClassTrait;
    /** @link http://symfony.com/doc/current/reference/forms/types/file.html#label-format */
    use LabelFormatTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return FileType::class;
    }

    /**
     * @param bool $multiple
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/file.html#multiple
     */
    public function setMultiple($multiple = true)
    {
        return $this->setOption('multipel', $multiple);
    }

    /**
     * @return bool|null
     */
    public function getMultiple()
    {
        return $this->getOption('multiple');
    }

    /**
     * @return $this
     */
    public function removeMultiple()
    {
        return $this->removeOption('multiple');
    }

    /**
     * @param array $mapping
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/file.html#error-mapping
     */
    public function setErrorMapping(array $mapping)
    {
        return $this->setOption('error_mapping', $mapping);
    }

    /**
     * @return mixed
     */
    public function getErrorMapping()
    {
        return $this->getOption('error_mapping');
    }

    /**
     * @return $this
     */
    public function removeErrorMapping()
    {
        return $this->removeOption('error_mapping');
    }
}
