<?php

declare(strict_types=1);

namespace App\Patterns\Strategy\Interface;

interface TestInterface
{
    public function execute(): string;
}