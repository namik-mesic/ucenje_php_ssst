<?php

namespace App\ClassesAndObjects;

/**
 * Class Point
 * @package App\ClassesAndObjects
 */
class Point
{
    /**
     * @var double
     */
    protected $x;

    /**
     * @var double
     */
    protected $y;

    /**
     * Point constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @param Point $point
     * @return bool
     */
    public function isEqualTo(Point $point)
    {
        return $this->getX() == $point->getX() && $this->getY() == $point->getY();
    }

    /**
     * @param double $dx
     * @param double $dy
     */
    public function translate($dx, $dy)
    {
        $this->translateX($dx);
        $this->translateY($dy);
    }

    /**
     * @param double $dx
     */
    public function translateX($dx)
    {
        $this->setX($this->getX() + $dx);
    }

    /**
     * @param double $dy
     */
    public function translateY($dy)
    {
        $this->setY($this->getY() + $dy);
    }

    /**
     * @param Point $point
     * @return float $double
     */
    public function length(Point $point)
    {
        return sqrt(
            pow($this->getX() - $point->getX(), 2)
            + pow($this->getY() - $point->getY(), 2)
        );
    }
}