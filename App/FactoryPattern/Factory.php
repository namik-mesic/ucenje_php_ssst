<?php

namespace App\FactoryPattern;

/**
 * Interface Factory
 * @package App\FactoryPattern
 */
interface Factory
{
    /**
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = null);
}