<?php

declare(strict_types=1);

namespace steevanb\SymfonyFormOptionsBuilder\QueryBuilderLoader;

interface EditableQueryBuilderConfigInterface
{
    public function getQueryCallBack(): ?callable;
}
