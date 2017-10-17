<?php

namespace App\ClassesAndObjects;

/**
 * Class Shape
 * @package App\ClassesAndObjects
 */
abstract class Shape
{
    use ClassPrintable;

    /**
     * @return int
     */
    public abstract static function pointCount();

    /**
     * @return double
     */
    public abstract function area();

    /**
     * @return double
     */
    public abstract function circumference();

    /**
     * @return int
     */
    public abstract static function edgeCount();

    /**
     * @return bool
     */
    public static function isThisRealLife()
    {
        dump(self::class);
        dump(static::class);
    }
}