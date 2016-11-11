<?php

namespace steevanb\SymfonyFormOptionsBuilder\QueryBuilderLoader;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Symfony\Bridge\Doctrine\Form\ChoiceList\ORMQueryBuilderLoader;

class OrmEditableQueryBuilderLoader extends ORMQueryBuilderLoader
{
    /** @var EditableQueryBuilderConfigInterface */
    protected $editableQueryBuilderConfig;

    /**
     * @param QueryBuilder $queryBuilder
     * @param EditableQueryBuilderConfigInterface $editableQueryBuilderConfig
     */
    public function __construct(
        QueryBuilder $queryBuilder,
        EditableQueryBuilderConfigInterface $editableQueryBuilderConfig
    ) {
        parent::__construct($queryBuilder);

        $this->editableQueryBuilderConfig = $editableQueryBuilderConfig;
    }

    /**
     * @return mixed
     */
    public function getEntities()
    {
        $query = $this->getQueryBuilder()->getQuery();
        if (is_callable($this->editableQueryBuilderConfig->getQueryCallBack())) {
            $query = call_user_func($this->editableQueryBuilderConfig->getQueryCallBack(), $query);
        }

        return $query->execute();
    }

    /**
     * @return QueryBuilder
     */
    protected function getQueryBuilder()
    {
        $reflectionProperty = new \ReflectionProperty(get_parent_class($this), 'queryBuilder');
        $reflectionProperty->setAccessible(true);
        $return = $reflectionProperty->getValue($this);
        $reflectionProperty->setAccessible(false);

        return $return;
    }
}
