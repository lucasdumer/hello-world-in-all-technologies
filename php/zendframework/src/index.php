<?php

chdir(dirname(__DIR__));

include __DIR__ . '/../vendor/autoload.php';

use Zend\Mvc\Application;

Application::init([
    'modules' => [
        'Zend\Router',
        'Application',
    ]
])->run();