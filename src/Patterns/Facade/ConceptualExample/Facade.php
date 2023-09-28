<?php

declare(strict_types=1);

namespace App\Patterns\Facade\ConceptualExample;

use App\Patterns\Facade\ConceptualExample\SubSystems\Subsystem1;
use App\Patterns\Facade\ConceptualExample\SubSystems\Subsystem2;

class Facade
{
    public function __construct(
        protected Subsystem1 $subSystem1,
        protected Subsystem2 $subSystem2,
    ) {
    }

    /**
     * The Facade's methods are convenient shortcuts to the sophisticated
     * functionality of the subsystems. However, clients get only to a fraction
     * of a subsystem's capabilities.
     */
    public function operation(): string
    {
        $result = "Facade initializes subsystems:" . PHP_EOL;
        $result .= $this->subSystem1->operation1();
        $result .= $this->subSystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:" . PHP_EOL;
        $result .= $this->subSystem1->operationN();
        $result .= $this->subSystem2->operationA();

        return $result;
    }
}
