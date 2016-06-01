<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

use Symfony\Component\Validator\Constraint;

trait ConstraintsTrait
{
    use OptionAccessorsTrait;

    /**
     * @param array $constraints
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#constraints
     */
    public function setConstraints(array $constraints)
    {
        return $this->setOption('constraints', $constraints);
    }

    /**
     * @param Constraint $constraint
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#constraints
     */
    public function addConstraint(Constraint $constraint)
    {
        $constraints = $this->getConstraints();
        if (is_array($constraints) === false) {
            $constraints = array();
        }
        $constraints[] = $constraint;
        $this->setConstraints($constraints);

        return $this;
    }

    /**
     * @return array|string
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#constraints
     */
    public function getConstraints()
    {
        return $this->getOption('constraints');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#constraints
     */
    public function removeConstraints()
    {
        return $this->removeOption('constraints');
    }
}
