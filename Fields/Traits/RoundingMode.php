<?php

namespace steevanb\FormUtils\Fields\Traits;

use Symfony\Component\Form\Extension\Core\DataTransformer\IntegerToLocalizedStringTransformer;

trait RoundingMode
{
    use ParameterAccessors;

    /**
     * @param int $roundingMode
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/integer.html#rounding-mode
     */
    public function setRoundingMode($roundingMode)
    {
        return $this->setParameter('rounding_mode', $roundingMode);
    }

    /**
     * @param null|int $default
     * @return int
     */
    public function getRoundingMode($default = IntegerToLocalizedStringTransformer::ROUND_DOWN)
    {
        return $this->getParameter('rounding_mode', $default);
    }
}
