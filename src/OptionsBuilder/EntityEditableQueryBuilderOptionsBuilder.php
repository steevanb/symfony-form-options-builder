<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder;

use Doctrine\ORM\Query;
use Steevanb\SymfonyFormOptionsBuilder\Type\EntityEditableQueryBuilderType;

class EntityEditableQueryBuilderOptionsBuilder extends EntityOptionsBuilder
{
    public static function getBuilderType(): string
    {
        return EntityEditableQueryBuilderType::class;
    }

    /** Not in Symfony, allow you to add a callback when getQuery() will be called, to edit your Query */
    public function setQueryCallBack(callable $callBack): static
    {
        return $this->setOption('query_call_back', $callBack);
    }

    public function getQueryCallBack(): ?callable
    {
        return $this->getOption('query_call_back');
    }

    public function removeQueryCallback(): static
    {
        return $this->removeOption('query_call_back');
    }

    public function setPartialQueryCallBack(): static
    {
        return $this->setQueryCallBack(function(Query $query) {
            return $query->setHint(Query::HINT_FORCE_PARTIAL_LOAD, true);
        });
    }
}
