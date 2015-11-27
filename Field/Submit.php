<?php

namespace steevanb\FormUtils\Field;

class Submit extends AbstractField
{
    use Behavior\BaseTypeTrait;
    use Behavior\AutofocusTrait;

    /**
     * @param null|false|array $groups
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/submit.html#validation-groups
     */
    public function setValidationGroups($groups)
    {
        return $this->setOption('validation_groups', $groups);
    }

    /**
     * @return null|false|array
     */
    public function getValidationGroups()
    {
        return $this->getOption('validation_groups');
    }
}
