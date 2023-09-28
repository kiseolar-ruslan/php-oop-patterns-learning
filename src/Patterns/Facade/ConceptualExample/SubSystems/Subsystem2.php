<?php

declare(strict_types=1);

namespace App\Patterns\Facade\ConceptualExample\SubSystems;

/**
 * Some facades can work with multiple subsystems at the same time.
 */
class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: Get ready!" . PHP_EOL;
    }

    public function operationA(): string
    {
        return "Subsystem2: Fire!" . PHP_EOL;
    }
}