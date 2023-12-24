<?php

use  Controller\AbstractController;

include_once 'routes.php';

function processRoutes(): void
{
    global $_routes;

    $route = $_routes[$_SERVER['REQUEST_URI']] ?? null;

    if (!isset($route)) {
        throw new Exception('Page is not found');
    }

    if (!isset($route['controller'], $route['action'])) {
        throw new Exception('Invalid config');
    }

    if (!class_exists($route['controller'])) {
        throw new Exception('Page is not found');
    }

    $controller = new $route['controller'];

    if (!$controller instanceof AbstractController) {
        throw new Exception('Invalid controller');
    }

    $method = $route['action'] . 'Action';

    if (!method_exists($controller, $method)) {
        throw new Exception('Page is not found');
    }

    $controller->{$method}();
}
