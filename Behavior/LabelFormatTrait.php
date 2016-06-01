<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait LabelFormatTrait
{
    use OptionAccessorsTrait;

    /**
     * @param string $format
     * @return $this
     * @link https://github.com/symfony/symfony-docs/pull/5642
     * @since 2.6
     */
    public function setLabelFormat($format)
    {
        return $this->setOption('label_format', $format);
    }

    /**
     * @return string
     * @link https://github.com/symfony/symfony-docs/pull/5642
     * @since 2.6
     */
    public function getLabelFormat()
    {
        return $this->getOption('label_format');
    }

    /**
     * @return $this
     * @link https://github.com/symfony/symfony-docs/pull/5642
     * @since 2.6
     */
    public function removeLabelFormat()
    {
        return $this->removeOption('label_format');
    }
}
