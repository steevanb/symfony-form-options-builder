<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\QueryBuilderLoader;

interface EditableQueryBuilderConfigInterface
{
    public function getQueryCallBack(): ?callable;
}
