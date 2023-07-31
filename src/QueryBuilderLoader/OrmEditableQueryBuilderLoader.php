<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\QueryBuilderLoader;

use Doctrine\ORM\QueryBuilder;
use Symfony\Bridge\Doctrine\Form\ChoiceList\ORMQueryBuilderLoader;

class OrmEditableQueryBuilderLoader extends ORMQueryBuilderLoader
{
    /** @var EditableQueryBuilderConfigInterface */
    protected $editableQueryBuilderConfig;

    public function __construct(
        QueryBuilder $queryBuilder,
        EditableQueryBuilderConfigInterface $editableQueryBuilderConfig
    ) {
        parent::__construct($queryBuilder);

        $this->editableQueryBuilderConfig = $editableQueryBuilderConfig;
    }

    public function getEntities()
    {
        $query = $this->getQueryBuilder()->getQuery();
        if (is_callable($this->editableQueryBuilderConfig->getQueryCallBack())) {
            $query = call_user_func($this->editableQueryBuilderConfig->getQueryCallBack(), $query);
        }

        return $query->execute();
    }

    protected function getQueryBuilder(): QueryBuilder
    {
        $reflectionProperty = new \ReflectionProperty(get_parent_class($this), 'queryBuilder');
        $reflectionProperty->setAccessible(true);
        $return = $reflectionProperty->getValue($this);
        $reflectionProperty->setAccessible(false);

        return $return;
    }
}
