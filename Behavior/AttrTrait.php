<?php

namespace steevanb\SymfonyFormOptionsBuilder\Behavior;

trait AttrTrait
{
    use OptionAccessorsTrait;

    /**
     * @param array $attr
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/form.html#attr
     */
    public function setAttr(array $attr)
    {
        return $this->setOption('attr', $attr);
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function addAttr($name, $value)
    {
        $attr = $this->getAttr();
        if (is_array($attr) === false) {
            $attr = array();
        }
        $attr[$name] = $value;
        $this->setAttr($attr);

        return $this;
    }

    /**
     * @param string|null $name
     * @return array|mixed
     */
    public function getAttr($name = null)
    {
        $attr = $this->getOption('attr');

        if (empty($name)) {
            return $attr;
        }
        if (is_array($attr) === false) {
            return Option::DEFAULT_VALUE;
        }

        $key = array_search($name, $attr);

        return ($key === false) ? Option::DEFAULT_VALUE : $attr[$key];
    }

    /**
     * @param string $name
     * @return $this
     */
    public function removeAttr($name)
    {
        $attr = $this->getOption('attr');
        if (is_array($attr) === false) {
            return $this;
        }
        $key = array_search($name, $attr);
        if ($key !== false) {
            unset($attr[$key]);
        }

        return $this->setAttr($attr);
    }
}
