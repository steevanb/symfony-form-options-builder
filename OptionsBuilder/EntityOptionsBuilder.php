<?php

namespace steevanb\FormUtils\OptionsBuilder;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class EntityOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;
    use Behavior\ChoicesListTrait;
    use Behavior\ByReferenceTrait;

    /**
     * @param \stdClass $class
     * @return $this
     */
    public function setRequiredOptions($class)
    {
        $this->setClass($class);

        return $this;
    }

    /**
     * @param string $class
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#class
     */
    public function setClass($class)
    {
        return $this->setOption('class', $class);
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->getOption('class');
    }

    /**
     * @param string $dataClass
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data-class
     */
    public function setDataClass($dataClass)
    {
        return $this->setOption('data_class', $dataClass);
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return $this->getOption('data_class');
    }

    /**
     * @param string $em
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#em
     */
    public function setEm($em)
    {
        return $this->setOption('em', $em);
    }

    /**
     * @return string
     */
    public function getEm()
    {
        return $this->getOption('em');
    }

    /**
     * @param string $groupBy
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#group-by
     */
    public function setGroupBy($groupBy)
    {
        return $this->setOption('group_by', $groupBy);
    }

    /**
     * @return string
     */
    public function getGroupBy()
    {
        return $this->getOption('group_by');
    }

    /**
     * @param string $property
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#property
     */
    public function setProperty($property)
    {
        return $this->setOption('property', $property);
    }

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->getOption('property');
    }

    /**
     * @param QueryBuilder|\Closure $queryBuilder
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#query-builder
     */
    public function setQueryBuilder($queryBuilder)
    {
        return $this->setOption('query_builder', $queryBuilder);
    }

    /**
     * @return null|QueryBuilder|Closure
     */
    public function getQueryBuilder()
    {
        return $this->getOption('query_builder');
    }

    /**
     * @param string $method
     * @param array $params
     * @return $this
     */
    public function setRepositoryMethod($method, $params = array())
    {
        return $this->setOption('query_builder', function (EntityRepository $repository) use ($method, $params) {
            return call_user_func(array($repository, $method), $params);
        });
    }
}
