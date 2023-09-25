<?php

declare(strict_types=1);

namespace App\Patterns\Strategy\Actions;

use App\Patterns\Strategy\Interface\TestInterface;

class Child2 implements TestInterface
{
    public function execute(): string
    {
        return 'child 2';
    }
}