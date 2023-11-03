<?php

declare(strict_types=1);

namespace App\Framework\Http;

use FastRoute\RouteCollector;

use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routes = require_once BASE_PATH . '/../src/Framework/Routes/web.php';

            foreach ($routes as $route) {
                $routeCollector->addRoute(...$route);
            };
        });

        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPathInfo()
        );

        //Destructurization
        [$status, [$controller, $method], $vars] = $routeInfo;

        $response = call_user_func_array([new $controller(), $method], $vars);

        return $response;
    }
}