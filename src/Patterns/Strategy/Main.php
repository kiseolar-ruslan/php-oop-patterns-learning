<?php

declare(strict_types=1);

namespace App\Patterns\Strategy;

use App\Patterns\Strategy\Interface\TestInterface;

class Main implements TestInterface
{
    public function __construct(protected TestInterface $obj)
    {
    }

    public function changeObj(TestInterface $changedObj): void
    {
        $this->obj = $changedObj;
    }

    public function execute(): string
    {
        return $this->obj->execute();
    }
}