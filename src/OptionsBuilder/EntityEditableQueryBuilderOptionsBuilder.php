<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Doctrine\ORM\Query;
use Steevanb\SymfonyFormOptionsBuilder\{
    OptionsBuilder\Behavior\OptionsBuilderInterface,
    Type\EntityEditableQueryBuilderType
};

class EntityEditableQueryBuilderOptionsBuilder extends EntityOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return EntityEditableQueryBuilderType::class;
    }

    /**
     * Not in Symfony, allow you to add a callback when getQuery() will be called, to edit your Query
     * @return $this
     */
    public function setQueryCallBack(callable $callBack): OptionsBuilderInterface
    {
        return $this->setOption('query_call_back', $callBack);
    }

    public function getQueryCallBack(): ?callable
    {
        return $this->getOption('query_call_back');
    }

    /** @return $this */
    public function removeQueryCallback(): OptionsBuilderInterface
    {
        return $this->removeOption('query_call_back');
    }

    /** @return $this */
    public function setPartialQueryCallBack(): OptionsBuilderInterface
    {
        return $this->setQueryCallBack(function(Query $query) {
            return $query->setHint(Query::HINT_FORCE_PARTIAL_LOAD, true);
        });
    }
}
