<?php

use App\FactoryPattern\Configuration;
use App\ContainerPattern\Container;

include "vendor/autoload.php";

Container::singleton(Configuration::class, function () {


    $configuration  = new Configuration;

    $configuration->setConfig('version', '1.0');
    $configuration->setConfig('app_name', 'Test App');
    $configuration->setConfig('authors', [
        'Namik Mesic',
        'Omar Drljevic'
    ]);

    return $configuration;


});

Container::bind('a', 'b');

$configurationReference = Container::resolve(Configuration::class);
$configurationReference2 = Container::resolve(Configuration::class);
$configurationReference3 = Container::resolve(Configuration::class);
$configurationReference4 = Container::resolve(Configuration::class);

dump($configurationReference, $configurationReference2, $configurationReference3, $configurationReference4);