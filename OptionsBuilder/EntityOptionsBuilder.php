<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\QueryBuilder;
use steevanb\SymfonyFormOptionsBuilder\Behavior\ByReferenceTrait;
use steevanb\SymfonyFormOptionsBuilder\Behavior\DataClassTrait;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EntityOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;
    use DataClassTrait;
    use ByReferenceTrait;

    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return EntityType::class;
    }

    /**
     * @param string $class
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#class
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
     * @param string $em
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#em
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
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#group-by
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
     * @param QueryBuilder|\Closure $queryBuilder
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#query-builder
     */
    public function setQueryBuilder($queryBuilder)
    {
        return $this->setOption('query_builder', $queryBuilder);
    }

    /**
     * @return null|QueryBuilder|\Closure
     */
    public function getQueryBuilder()
    {
        return $this->getOption('query_builder');
    }

    /**
     * @param string $method
     * @param mixed|array $params
     * @return $this
     */
    public function setRepositoryMethod($method, $params = array())
    {
        if (is_array($params) === false) {
            $params = [$params];
        }

        return $this->setOption('query_builder', function (ObjectRepository $repository) use ($method, $params) {
            return call_user_func_array(array($repository, $method), $params);
        });
    }
}
