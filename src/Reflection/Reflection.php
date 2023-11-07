<?php

declare(strict_types=1);

namespace App\Reflection;

//#[Route("/home-page")]
class Reflection
{
    private function getCount(int $number): int
    {
        return $number + 1;
    }
}