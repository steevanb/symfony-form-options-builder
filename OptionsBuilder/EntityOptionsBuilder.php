<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\{
    Persistence\ObjectRepository,
    Persistence\ObjectManager,
    ORM\QueryBuilder
};
use steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\{
    AbstractOptionsBuilder,
    ByReferenceTrait,
    DataClassTrait,
    OptionsBuilderInterface
};

class EntityOptionsBuilder extends AbstractOptionsBuilder
{
    use Behavior\ChoiceTypeTrait;
    use DataClassTrait;
    use ByReferenceTrait;

    public static function getBuilderType(): string
    {
        return EntityType::class;
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#class
     */
    public function setClass(string $class): OptionsBuilderInterface
    {
        return $this->setOption('class', $class);
    }

    public function getClass(): ?string
    {
        return $this->getOption('class');
    }

    /** @return $this */
    public function removeClass(): OptionsBuilderInterface
    {
        return $this->removeOption('class');
    }

    /**
     * @param string|ObjectManager $em
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#em
     */
    public function setEm(ObjectManager $em): OptionsBuilderInterface
    {
        return $this->setOption('em', $em);
    }

    /** @return $this */
    public function setEmName(string $em): OptionsBuilderInterface
    {
        return $this->setOption('em', $em);
    }

    /** @return string|ObjectManager */
    public function getEm()
    {
        return $this->getOption('em');
    }

    /** @return $this */
    public function removeEm(): OptionsBuilderInterface
    {
        return $this->removeOption('em');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#group-by
     */
    public function setGroupBy(string $groupBy): OptionsBuilderInterface
    {
        return $this->setOption('group_by', $groupBy);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#group-by
     */
    public function setGroupByArray(array $groupBy): OptionsBuilderInterface
    {
        return $this->setOption('group_by', $groupBy);
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#group-by
     */
    public function setGroupByCallable(callable $groupBy): OptionsBuilderInterface
    {
        return $this->setOption('group_by', $groupBy);
    }

    /** @return string|array|callable */
    public function getGroupBy()
    {
        return $this->getOption('group_by');
    }

    /** @return $this */
    public function removeGroupBy(): OptionsBuilderInterface
    {
        return $this->removeOption('group_by');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/entity.html#query-builder
     */
    public function setQueryBuilder(QueryBuilder $queryBuilder): OptionsBuilderInterface
    {
        return $this->setOption('query_builder', $queryBuilder);
    }

    /** @return $this */
    public function setQueryBuilderClosure(\Closure $queryBuilder): OptionsBuilderInterface
    {
        return $this->setOption('query_builder', $queryBuilder);
    }

    /** @return QueryBuilder|\Closure|null */
    public function getQueryBuilder()
    {
        return $this->getOption('query_builder');
    }

    /** @return $this */
    public function setRepositoryMethod(string $method, array $params = []): OptionsBuilderInterface
    {
        return $this->setOption('query_builder', function (ObjectRepository $repository) use ($method, $params) {
            return call_user_func_array([$repository, $method], $params);
        });
    }
}
