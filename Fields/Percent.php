<?php

namespace steevanb\FormUtils\Fields;

class Percent extends AbstractField
{
    use Traits\FormType;
    use Traits\Scale;
    use Traits\PlaceHolder;
    use Traits\Autofocus;

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
     * @param null|string $default
     * @return string
     */
    public function getType($default = self::TYPE_FRACTIONAL)
    {
        return $this->getParameter('type', $default);
    }
}
