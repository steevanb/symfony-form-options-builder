<?php

namespace steevanb\SymfonyFormOptionsBuilder\QueryBuilderLoader;

interface EditableQueryBuilderConfigInterface
{
    /**
     * @return callable|null
     */
    public function getQueryCallBack();
}
