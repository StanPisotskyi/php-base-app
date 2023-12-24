<?php

use Controller\IndexController;
use Controller\PingController;

$_routes = [
    '/' => [
        'controller' => IndexController::class,
        'action' => 'index'
    ],
    '/ping' => [
        'controller' => PingController::class,
        'action' => 'index'
    ],
    '/ping-db' => [
        'controller' => PingController::class,
        'action' => 'checkDb'
    ]
];
