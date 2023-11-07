<?php

declare(strict_types=1);

namespace App\ChapterFour;

abstract class DomainObject
{
    public static function create(): static
    {
        return new static();
    }
}