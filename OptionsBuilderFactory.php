<?php

namespace steevanb\FormUtils;

use steevanb\FormUtils\OptionsBuilder\OptionsBuilderInterface;

class OptionsBuilderFactory
{
    /** @var array */
    protected static $types = [];

    /**
     * @param string $type
     * @return string
     * @throws \Exception
     */
    protected function getClass($type)
    {
        if (array_key_exists($type, static::$types)) {
            $class = static::$types[$type];
        } else {
            $class = 'steevanb\\FormUtils\\OptionsBuilder\\' . $type . 'OptionsBuilder';
        }

        if (class_exists($class) === false) {
            $message = 'Class "' . $class . '" does not exists.';
            $message .= ' Maybe you have a typo in your type ?';
            $message .= 'Allowed types : ' . implode(', ', array_keys(static::getTypes()));
            throw new \Exception($message);
        }

        return $class;
    }

    /**
     * @param string $type
     * @param string $class
     */
    public static function addType($type, $class)
    {
        static::$types[$type] = $class;
    }

    public static function getTypes()
    {
        foreach (glob(__DIR__ . '/OptionsBuilder/*.OptionsBuilder.php') as $file) {
            d($file);
        }
    }

    /**
     * @param string $type
     * @return OptionsBuilderInterface
     * @throws \Exception
     */
    public static function create($type)
    {
        $class = static::getClass($type);

        $optionsBuilder = new $class();
        if ($optionsBuilder instanceof OptionsBuilderInterface === false) {
            $interface = 'steevanb\FormUtils\OptionsBuilder\OptionsBuilderInterface';
            throw new \Exception('OptionsBuilder "' . $type . '" must implements ' . $interface);
        }

        return new $class();
    }
}
