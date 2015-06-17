<?php

namespace steevanb\FormUtils\Fields\Traits;

use Symfony\Component\Form\Extension\Core\DataTransformer\IntegerToLocalizedStringTransformer;

trait RoundingMode
{
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
     * @return int
     */
    public function getRoundingMode()
    {
        return $this->getParameter('rounding_mode', IntegerToLocalizedStringTransformer::ROUND_DOWN);
    }
}
