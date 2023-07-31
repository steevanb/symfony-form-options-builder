<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Doctrine\{
    ORM\QueryBuilder,
    Persistence\ObjectManager,
    Persistence\ObjectRepository
};
use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\AbstractOptionsBuilder,
    OptionsBuilder\Behavior\ChoiceTypeTrait,
    OptionsBuilder\Behavior\ByReferenceTrait,
    OptionsBuilder\Behavior\DataClassTrait
};
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EntityOptionsBuilder extends AbstractOptionsBuilder
{
    use ChoiceTypeTrait;
    use DataClassTrait;
    use ByReferenceTrait;

    public static function getBuilderType(): string
    {
        return EntityType::class;
    }

    public function setClass(string $class): static
    {
        return $this->setOption('class', $class);
    }

    public function getClass(): ?string
    {
        return $this->getOption('class');
    }

    public function removeClass(): static
    {
        return $this->removeOption('class');
    }

    public function setEm(ObjectManager $em): static
    {
        return $this->setOption('em', $em);
    }

    public function setEmName(string $em): static
    {
        return $this->setOption('em', $em);
    }

    public function getEm(): string|ObjectManager
    {
        return $this->getOption('em');
    }

    public function removeEm(): static
    {
        return $this->removeOption('em');
    }

    /** @param string|array<string>|callable $groupBy */
    public function setGroupBy(string|array|callable $groupBy): static
    {
        return $this->setOption('group_by', $groupBy);
    }

    /** @return string|array<string>|callable|null */
    public function getGroupBy(): string|array|callable|null
    {
        return $this->getOption('group_by');
    }

    public function removeGroupBy(): static
    {
        return $this->removeOption('group_by');
    }

    public function setQueryBuilder(QueryBuilder $queryBuilder): static
    {
        return $this->setOption('query_builder', $queryBuilder);
    }

    public function setQueryBuilderClosure(\Closure $queryBuilder): static
    {
        return $this->setOption('query_builder', $queryBuilder);
    }

    public function getQueryBuilder(): QueryBuilder|\Closure|null
    {
        return $this->getOption('query_builder');
    }

    /** @param array<mixed> $params */
    public function setRepositoryMethod(string $method, array $params = []): static
    {
        return $this->setOption(
            'query_builder',
            function (ObjectRepository $repository) use ($method, $params) {
                return call_user_func_array([$repository, $method], $params);
            }
        );
    }
}
