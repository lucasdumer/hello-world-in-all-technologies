<?php

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

class Module
{
    public function getConfig()
    {
        return [
            'router' => [
                'routes' => [
                    'home' => [
                        'type'    => Literal::class,
                        'options' => [
                            'route'    => '/',
                            'defaults' => [
                                'controller' => IndexController::class,
                                'action'     => 'index',
                            ],
                        ],
                    ]
                ],
            ],
            'controllers' => [
                'factories' => [
                    IndexController::class => InvokableFactory::class,
                ],
            ],
            'view_manager' => [
                'display_not_found_reason' => false,
                'display_exceptions'       => false,
                'doctype'                  => 'HTML5',
                'not_found_template'       => '404',
                'exception_template'       => 'error',
                'template_map' => [
                    'layout/layout' => __DIR__ . '/view/layout.phtml',
                    'application/index/index' => __DIR__ . '/view/index.phtml',
                    '404' => __DIR__ . '/view/404.phtml',
                    'error' => __DIR__ . '/view/error.phtml',
                ],
                'template_path_stack' => [
                    __DIR__ . '/view',
                ],
            ],
        ];
    }
}