<?php

declare(strict_types=1);

namespace App\Patterns\Facade\ConceptualExample\SubSystems;

/**
 * The Subsystem can accept requests either from the facade or client directly.
 * In any case, to the Subsystem, the Facade is yet another client, and it is not
 * a part of the Subsystem.
 */
class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1: Ready!" . PHP_EOL;
    }

    public function operationN(): string
    {
        return "Subsystem1: Go!" . PHP_EOL;
    }
}