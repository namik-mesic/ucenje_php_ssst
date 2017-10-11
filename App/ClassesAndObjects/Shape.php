<?php

namespace App\ClassesAndObjects;

/**
 * Interface Shape
 * @package App\ClassesAndObjects
 */
interface Shape
{
    /**
     * @return int
     */
    public static function pointCount();

    /**
     * @return double
     */
    public function area();

    /**
     * @return double
     */
    public function circumference();

    /**
     * @return int
     */
    public static function edgeCount();
}