<?php

namespace App\ClassesAndObjects;

/**
 * Class Triangle
 * @package App\ClassesAndObjects
 */
class Triangle extends Shape
{
    /**
     * @var int
     */
    public static $POINT_COUNT = 3;
    /**
     * @var int
     */
    public static $EDGE_COUNT = 3;

    /**
     * @var Point
     */
    protected $a;

    /**
     * @var Point
     */
    protected $b;

    /**
     * @var Point
     */
    protected $c;

    /**
     * Triangle constructor.
     * @param Point $a
     * @param Point $b
     * @param Point $c
     */
    public function __construct(Point $a, Point $b, Point $c)
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
    }

    /**
     * @return Point
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param Point $a
     */
    public function setA(Point $a)
    {
        $this->a = $a;
    }

    /**
     * @return Point
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param Point $b
     */
    public function setB(Point $b)
    {
        $this->b = $b;
    }

    /**
     * @return Point
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param Point $c
     */
    public function setC(Point $c)
    {
        $this->c = $c;
    }

    /**
     * @return double
     */
    public function circumference()
    {
        return $this->lengthC()
            + $this->lengthB()
            + $this->lengthA();
    }

    /**
     * @return float
     */
    public function lengthA()
    {
        return $this->getB()->length($this->getC());
    }

    /**
     * @return float
     */
    public function lengthB()
    {
        return $this->getA()->length($this->getC());
    }

    /**
     * @return float
     */
    public function lengthC()
    {
        return $this->getA()->length($this->getB());
    }

    /**
     * @return double
     */
    public function area()
    {
        $circumference = $this->circumference();
        $circumferenceHalved = $circumference / 2;

        return sqrt(
            $circumferenceHalved
            * ($circumferenceHalved - $this->lengthA())
            * ($circumferenceHalved - $this->lengthB())
            * ($circumferenceHalved - $this->lengthC())
        );
    }

    /**
     * @return int
     */
    public static function pointCount()
    {
        return static::$POINT_COUNT;
    }

    /**
     * @return int
     */
    public static function edgeCount()
    {
        return static::$EDGE_COUNT;
    }
}
