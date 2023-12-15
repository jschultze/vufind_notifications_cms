<?php

namespace VuFindAdmin\Module\Configuration;

$config = [
    'controllers' => [
        'factories' => [
            'VuFindAdmin\Controller\AdminController' => 'VuFind\Controller\AbstractBaseFactory',
            'VuFindAdmin\Controller\ConfigController' => 'VuFind\Controller\AbstractBaseFactory',
            'VuFindAdmin\Controller\FeedbackController' => 'VuFind\Controller\AbstractBaseFactory',
            'VuFindAdmin\Controller\MaintenanceController' => 'VuFind\Controller\AbstractBaseFactory',
            'VuFindAdmin\Controller\SocialstatsController' => 'VuFind\Controller\AbstractBaseFactory',
            'VuFindAdmin\Controller\TagsController' => 'VuFind\Controller\AbstractBaseFactory',
            'VuFindAdmin\Controller\OverdriveController' =>
                'VuFind\Controller\AbstractBaseFactory',
        ],
        'aliases' => [
            'Admin' => 'VuFindAdmin\Controller\AdminController',
            'AdminConfig' => 'VuFindAdmin\Controller\ConfigController',
            'AdminFeedback' => 'VuFindAdmin\Controller\FeedbackController',
            'AdminMaintenance' => 'VuFindAdmin\Controller\MaintenanceController',
            'AdminSocial' => 'VuFindAdmin\Controller\SocialstatsController',
            'AdminTags' => 'VuFindAdmin\Controller\TagsController',
            'AdminOverdrive' => 'VuFindAdmin\Controller\OverdriveController',
        ],
    ],
    'router' => [
        'routes' => [
            'admin' => [
                'type' => 'Laminas\Router\Http\Literal',
                'options' => [
                    'route'    => '/Admin',
                    'defaults' => [
                        'controller' => 'Admin',
                        'action'     => 'Home',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'disabled' => [
                        'type' => 'Laminas\Router\Http\Literal',
                        'options' => [
                            'route'    => '/Disabled',
                            'defaults' => [
                                'controller' => 'Admin',
                                'action'     => 'Disabled',
                            ],
                        ],
                    ],
                    'config' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Config[/:action]',
                            'defaults' => [
                                'controller' => 'AdminConfig',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                    'feedback' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Feedback[/:action]',
                            'defaults' => [
                                'controller' => 'AdminFeedback',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                    'maintenance' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Maintenance[/:action]',
                            'defaults' => [
                                'controller' => 'AdminMaintenance',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                    'script' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Script[/:name]',
                            'defaults' => [
                                'controller' => 'AdminMaintenance',
                                'action'     => 'Script',
                            ],
                        ],
                    ],
                    'social' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Social[/:action]',
                            'defaults' => [
                                'controller' => 'AdminSocial',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                    'tags' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Tags[/:action]',
                            'defaults' => [
                                'controller' => 'AdminTags',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                    'overdrive' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Overdrive',
                            'defaults' => [
                                'controller' => 'AdminOverdrive',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                    'notifications-pages' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Notifications[/:action][?page_id=:page_id]',
                            'defaults' => [
                                'controller' => 'Notifications',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                    'notifications-broadcasts' => [
                        'type' => 'Laminas\Router\Http\Segment',
                        'options' => [
                            'route'    => '/Notifications[/:action][?broadcast_id=:broadcast_id]',
                            'defaults' => [
                                'controller' => 'Notifications',
                                'action'     => 'Home',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];

return $config;
