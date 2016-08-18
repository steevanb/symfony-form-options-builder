<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait EmptyDataTrait
{
    use OptionAccessorsTrait;

    /**
     * @param mixed $data
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function setEmptyData($data)
    {
        return $this->setOption('empty_data', $data);
    }

    /**
     * @return mixed
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function getEmptyData()
    {
        return $this->getOption('empty_data');
    }

    /**
     * @return $this
     * @link http://symfony.com/doc/3.0/reference/forms/types/form.html#empty-data
     */
    public function removeEmptyData()
    {
        return $this->removeOption('empty_data');
    }
}
