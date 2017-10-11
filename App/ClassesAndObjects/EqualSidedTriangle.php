<?php

namespace App\ClassesAndObjects;

/**
 * Class EqualSidedTriangle
 * @package App\ClassesAndObjects
 */
class EqualSidedTriangle extends Triangle
{
    /**
     * @return float
     */
    public function circumference()
    {
        return $this->lengthA() * 3;
    }

    /**
     * @return float
     */
    public function area()
    {
        return pow($this->lengthA(), 2) * sqrt(3) / 4.0;
    }
}