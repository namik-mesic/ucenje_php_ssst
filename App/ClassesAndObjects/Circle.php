<?php

namespace App\ClassesAndObjects;

/**
 * Class Circle
 * @package App\ClassesAndObjects
 */
class Circle implements Shape
{
    /**
     * @var Point
     */
    private $center;
    /**
     * @var
     */
    private $radius;

    /**
     * Circle constructor.
     * @param Point $center
     * @param $radius
     */
    public function __construct(Point $center, $radius)
    {
        $this->center = $center;
        $this->radius = $radius;
    }
    
    /**
     * @return int
     */
    public static function pointCount()
    {
        return null;
    }

    /**
     * @return double
     */
    public function area()
    {
        return 10;
    }

    /**
     * @return double
     */
    public function circumference()
    {
        return 5;
    }

    /**
     * @return int
     */
    public static function edgeCount()
    {
        return null;
    }
}