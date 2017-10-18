<?php

namespace App\FactoryPattern;
use App\SingletonPattern\Singleton;

/**
 * Class Configuration
 * @package App\FactoryPattern
 */
class Configuration
{
    /**
     * @var array
     */
    protected $keyValuePairs = [];

    /**
     * @param $key
     * @return mixed
     */
    public function getConfig($key)
    {
        if (array_key_exists($key, $this->keyValuePairs))
            return $this->keyValuePairs[$key];

        else
            return null;
    }

    /**
     * @param $key
     * @param $value
     */
    public function setConfig($key, $value)
    {
        $this->keyValuePairs[$key] = $value;
    }

    /**
     * @param $key
     */
    public function removeConfig($key)
    {
        if (array_key_exists($key, $this->keyValuePairs))
            unset($this->keyValuePairs[$key]);
    }
}