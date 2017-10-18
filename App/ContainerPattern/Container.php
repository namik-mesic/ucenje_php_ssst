<?php

namespace App\ContainerPattern;

use Closure;

/**
 * Class Container
 */
abstract class Container
{
    /**
     * @var array
     */
    protected static $implementations = [];

    /**
     * @param $key
     * @param Closure|mixed $implementation
     */
    public static function bind($key, $implementation)
    {
        static::$implementations[$key] = $implementation;
    }

    /**
     * @param $key
     * @param $implementation
     */
    public static function singleton($key, $implementation)
    {
        if ($implementation instanceof Closure)
            static::$implementations[$key] = $implementation();

        else
            static::$implementations[$key] = $implementation;
    }

    /**
     * @param $key
     * @return mixed
     */
    public static function resolve($key)
    {
        if (array_key_exists($key, static::$implementations))
        {
            $implementation = static::$implementations[$key];

            if ($implementation instanceof Closure)
                return $implementation();

            else
                return $implementation;
        }

        else
            return null;
    }
}