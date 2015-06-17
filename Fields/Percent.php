<?php

namespace steevanb\FormUtils\Fields;

class Percent extends AbstractField
{
    use Traits\FormType;
    use Traits\Scale;

    const TYPE_FRACTIONAL = 'fractional';
    const TYPE_INTEGER = 'integer';

    /**
     * @param string $type Use self::TYPE_XXX
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/percent.html#type
     */
    public function setType($type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getParameter('type', self::TYPE_FRACTIONAL);
    }
}
