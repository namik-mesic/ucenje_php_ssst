<?php

namespace App\FactoryPattern;

/**
 * Class ConfigurationFactory
 * @package App\FactoryPattern
 */
class ConfigurationFactory implements Factory
{
    /**
     * @param array $attributes
     * @return Configuration
     */
    public function create($attributes = null)
    {
        $configuration  = Configuration::getInstance();

        $configuration->setConfig('version', '1.0');
        $configuration->setConfig('app_name', 'Test App');
        $configuration->setConfig('authors', [
            'Namik Mesic',
            'Omar Drljevic'
        ]);

        if ($attributes)
            foreach ($attributes as $key => $value)
                $configuration->setConfig($key, $value);

        return $configuration;
    }
}