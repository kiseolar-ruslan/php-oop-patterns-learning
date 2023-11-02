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
            $routeCollector->addRoute('GET', '/', function () {
                $content = "<h1>Hello</h1>";

                return new Response($content);
            });
        });

        $routeInfo = $dispatcher->dispatch();
    }
}