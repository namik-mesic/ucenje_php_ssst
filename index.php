<?php

include 'vendor/autoload.php';

use App\ClassesAndObjects\Circle;
use App\ClassesAndObjects\EqualSidedTriangle;
use App\ClassesAndObjects\Shape;
use App\ClassesAndObjects\Triangle;
use App\ClassesAndObjects\Point;

$shapes = [
    new Triangle(
        new Point(0, 0),
        new Point(0, 3),
        new Point(3, 0)
    ),
    new EqualSidedTriangle(
        new Point(0, 0),
        new Point(sqrt(3), sqrt(3)),
        new Point(0, 2)
    ),
    new Circle(
        new Point(0, 0),
        5
    )
];

/**
 * @param Shape $shape
 */
function printShapeArea(Shape $shape)
{
    print $shape->area() . '<br>';
}


foreach ($shapes as $shape)
    printShapeArea($shape);