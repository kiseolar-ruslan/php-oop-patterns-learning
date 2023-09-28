<?php

declare(strict_types=1);

use App\Patterns\Facade\ConceptualExample\Facade;
use App\Patterns\Facade\ConceptualExample\SubSystems\Subsystem1;
use App\Patterns\Facade\ConceptualExample\SubSystems\Subsystem2;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * The client code works with complex subsystems through a simple interface
 * provided by the Facade. When a facade manages the lifecycle of the subsystem,
 * the client might not even know about the existence of the subsystem. This
 * approach lets you keep the complexity under control.
 */
function clientCode(Facade $facade): string
{
    return $facade->operation();
}

$facade = new Facade(
    new Subsystem1(),
    new Subsystem2(),
);

echo clientCode($facade);