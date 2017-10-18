<?php

namespace App\SingletonPattern;

/**
 * Class Singleton
 * @package App\SingletonPattern
 */
abstract class Singleton
{
    /**
     * @var static
     */
    protected static $instance;

    /**
     * Singleton constructor.
     */
    protected abstract function __construct();

    /**
     * @return static
     */
    public static function getInstance()
    {
        if (!static::$instance)
            static::$instance = new static;

        return static::$instance;
    }
}