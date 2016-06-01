<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait ValidationGroupsTrait
{
    use OptionAccessorsTrait;

    /**
     * @param null|false|array|\Closure $groups
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/submit.html#validation-groups
     */
    public function setValidationGroups($groups)
    {
        return $this->setOption('validation_groups', $groups);
    }

    /**
     * @param null|false|array|\Closure $group
     * @return $this
     */
    public function addValidationGroup($group)
    {
        $groups = $this->getValidationGroups();
        if (in_array($group, $groups) === false) {
            $groups[] = $group;
        }

        return $this->setValidationGroups($groups);
    }

    /**
     * @param string $group
     * @return bool
     * @link http://symfony.com/doc/current/reference/forms/types/submit.html#validation-groups
     */
    public function hasValidationGroup($group)
    {
        return in_array($group, $this->getValidationGroups());
    }

    /**
     * @return null|false|array|\Closure
     * @link http://symfony.com/doc/current/reference/forms/types/submit.html#validation-groups
     */
    public function getValidationGroups()
    {
        return $this->getOption('validation_groups');
    }

    /**
     * @return $this
     */
    public function removeValidationGroups()
    {
        return $this->removeOption('validation_groups');
    }
}
