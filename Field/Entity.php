<?php

namespace steevanb\FormUtils\Field;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class Entity extends AbstractField
{
    use Behavior\ChoiceTypeTrait;
    use Behavior\ChoicesListTrait;
    use Behavior\ByReferenceTrait;

    /**
     * @param string $class
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#class
     */
    public function setClass($class)
    {
        return $this->setParameter('class', $class);
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->getParameter('class');
    }

    /**
     * @param string $dataClass
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#data-class
     */
    public function setDataClass($dataClass)
    {
        return $this->setParameter('data_class', $dataClass);
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return $this->getParameter('data_class');
    }

    /**
     * @param string $em
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#em
     */
    public function setEm($em)
    {
        return $this->setParameter('em', $em);
    }

    /**
     * @return string
     */
    public function getEm()
    {
        return $this->getParameter('em');
    }

    /**
     * @param string $groupBy
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#group-by
     */
    public function setGroupBy($groupBy)
    {
        return $this->setParameter('group_by', $groupBy);
    }

    /**
     * @return string
     */
    public function getGroupBy()
    {
        return $this->getParameter('group_by');
    }

    /**
     * @param string $property
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#property
     */
    public function setProperty($property)
    {
        return $this->setParameter('property', $property);
    }

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->getParameter('property');
    }

    /**
     * @param QueryBuilder|\Closure $queryBuilder
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/entity.html#query-builder
     */
    public function setQueryBuilder($queryBuilder)
    {
        return $this->setParameter('query_builder', $queryBuilder);
    }

    /**
     * @return null|QueryBuilder|Closure
     */
    public function getQueryBuilder()
    {
        return $this->getParameter('query_builder');
    }

    /**
     * @param string $method
     * @param array $params
     * @return $this
     */
    public function setRepositoryMethod($method, $params = array())
    {
        return $this->setParameter('query_builder', function (EntityRepository $repository) use ($method, $params) {
            return call_user_func(array($repository, $method), $params);
        });
    }
}