<?php
return array(
    'router' => array(
        'routes' => array(
            'customerpage' => array(
                'type' => 'Customer\Route\CustomerPage',
                'defaults' => array(
                    'controller' => 'Customer\Controller\CustomerPage',
                    'action' => 'index',
                )
            ),
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'Customer\Service\User' => 'Customer\Service\User',
        ),
    ),
    'route_manager' => array(
        'factories' => array(
            'Customer\Route\CustomerPage' => 'Customer\Route\CustomerPageFactory',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Customer\Controller\CustomerPage' => 'Customer\Controller\CustomerPageController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);