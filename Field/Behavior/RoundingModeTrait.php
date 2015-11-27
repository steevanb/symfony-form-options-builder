<?php

namespace steevanb\FormUtils\Field\Behavior;

use Symfony\Component\Form\Extension\Core\DataTransformer\IntegerToLocalizedStringTransformer;

trait RoundingModeTrait
{
    use OptionAccessorsTrait;

    /**
     * @param int $roundingMode
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#rounding-mode
     */
    public function setRoundingMode($roundingMode)
    {
        return $this->setOption('rounding_mode', $roundingMode);
    }

    /**
     * @param null|int $default
     * @return int
     */
    public function getRoundingMode($default = IntegerToLocalizedStringTransformer::ROUND_DOWN)
    {
        return $this->getOption('rounding_mode', $default);
    }
}
