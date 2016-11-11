<?php

namespace steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Doctrine\ORM\Query;
use steevanb\SymfonyFormOptionsBuilder\Type\EntityEditableQueryBuilderType;

class EntityEditableQueryBuilderOptionsBuilder extends EntityOptionsBuilder
{
    /**
     * @return string
     */
    public static function getBuilderType()
    {
        return EntityEditableQueryBuilderType::class;
    }

    /**
     * Not in Symfony
     * Allow you to add a callback when getQuery() will be called, to edit your Query
     *
     * @param callable|null $callBack
     * @return $this
     */
    public function setQueryCallBack($callBack)
    {
        return $this->setOption('query_call_back', $callBack);
    }

    /**
     * @return string
     */
    public function getQueryCallBack()
    {
        return $this->getOption('query_call_back');
    }

    /**
     * @return EntityEditableQueryBuilderOptionsBuilder
     */
    public function setPartialQueryCallBack()
    {
        return $this->setQueryCallBack(function(Query $query) {
            return $query->setHint(Query::HINT_FORCE_PARTIAL_LOAD, true);
        });
    }
}
