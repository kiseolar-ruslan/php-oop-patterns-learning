<?php

declare(strict_types=1);

namespace App\Patterns\TemplateMethod\Example\SubClasses;

use App\Patterns\TemplateMethod\Example\Game;

class FirstChild extends Game
{
    protected function buildStructures(): string
    {
        return 'Build structures!' . PHP_EOL;
    }

    protected function buildUnits(): string
    {
        return 'Build units!' . PHP_EOL;
    }

    protected function sendScouts(): string
    {
        if ($this->numOfScouts === 1) {
            return "Scout dispatched to the $this->position" . PHP_EOL;
        }

        return "$this->numOfScouts scouts dispatched to the $this->position" . PHP_EOL;
    }

    protected function sendWarriors(): string
    {
        if ($this->numOfWarriors === 1) {
            return "Warrior dispatched to the $this->position" . PHP_EOL;
        }

        return "$this->numOfWarriors warriors dispatched to the $this->position" . PHP_EOL;
    }
}