<?php

namespace App\ClassesAndObjects;

/**
 * Trait ClassPrintable
 * @package App\ClassesAndObjects
 */
trait ClassPrintable
{
    /**
     * @return void
     */
    public function printClassName()
    {
        echo get_class($this);
    }
}