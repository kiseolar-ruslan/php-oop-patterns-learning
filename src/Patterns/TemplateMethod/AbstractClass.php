<?php

declare(strict_types=1);

namespace App\Patterns\TemplateMethod;

abstract class AbstractClass
{
    public function __construct(
        protected string $position,
        protected int    $numOfScouts = 0,
        protected int    $numOfWarriors = 0,
        protected int    $numOfEnemies = 0,
    ) {
    }

    final public function templateMethod(): void
    {
        $result = $this->collectResources();
        $result .= $this->buildStructures();
        $result .= $this->buildUnits();
        $result .= $this->attack();

        echo $result;
    }

    protected function collectResources(): string
    {
        return 'Collect resources!' . PHP_EOL;
    }

    protected function attack(): string
    {
        $enemy = $this->closestEnemy();

        if ($enemy === false) {
            return $this->sendScouts();
        }

        return $this->sendWarriors();
    }

    protected function closestEnemy(): bool
    {
        if ($this->numOfEnemies <= 0) {
            return false;
        }

        return true;
    }

    abstract protected function buildStructures(): string;

    abstract protected function buildUnits(): string;

    abstract protected function sendScouts(): string;

    abstract protected function sendWarriors(): string;
}