<?php

namespace steevanb\FormUtils\Behavior;

trait LabelAttrTrait
{
    use OptionAccessorsTrait;

    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label-attr
     */
    public function setLabelAttr(array $attr)
    {
        return $this->setOption('label_attr', $attr);
    }

    /**
     * @return array|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label-attr
     */
    public function getLabelAttr()
    {
        return $this->getOption('label_attr');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#label-attr
     */
    public function removeLabelAttr()
    {
        return $this->removeOption('label_attr');
    }
}
